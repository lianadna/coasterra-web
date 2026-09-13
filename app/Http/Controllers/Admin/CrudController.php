<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Shared CRUD behaviour for every content resource in the admin panel.
 *
 * A child class only describes its model and its fields; the listing table,
 * the create/edit form, validation, image uploads and deletion are all driven
 * from that description so every module behaves the same way.
 */
abstract class CrudController extends Controller
{
    /** Eloquent model class this resource manages. */
    abstract protected function model(): string;

    /** Route name prefix, e.g. "admin.sliders". */
    abstract protected function routeName(): string;

    /** Singular human label, e.g. "Slider". */
    abstract protected function label(): string;

    /**
     * Field definitions. Each entry accepts:
     *   name, label, type, rules, options, relation, list, help, rows
     */
    abstract protected function fields(): array;

    /** Relations eager loaded on the index page. */
    protected function with(): array
    {
        return [];
    }

    /** Default ordering for the index page. */
    protected function orderBy(): array
    {
        return ['id', 'desc'];
    }

    protected function canCreate(): bool
    {
        return true;
    }

    /**
     * Permission required to reach this module, derived from its route name.
     * Users holding the Admin role bypass this via a Gate::before rule.
     */
    protected function permission(): string
    {
        return 'manage '.Str::after($this->routeName(), 'admin.');
    }

    protected function authorizeModule(): void
    {
        abort_unless(request()->user()?->can($this->permission()), 403);
    }

    public function index(Request $request)
    {
        $this->authorizeModule();

        [$column, $direction] = $this->orderBy();

        $query = $this->model()::query()->with($this->with())->orderBy($column, $direction);

        if ($search = trim((string) $request->query('q', ''))) {
            $searchable = collect($this->fields())
                ->whereIn('type', ['text', 'textarea', 'email', 'url'])
                ->pluck('name');

            $query->where(function ($q) use ($searchable, $search) {
                foreach ($searchable as $field) {
                    $q->orWhere($field, 'like', "%{$search}%");
                }
            });
        }

        return view('admin.crud.index', [
            'records' => $query->paginate(15)->withQueryString(),
            'fields' => $this->listFields(),
            'label' => $this->label(),
            'route' => $this->routeName(),
            'canCreate' => $this->canCreate(),
            'search' => $search ?? '',
        ]);
    }

    public function create()
    {
        $this->authorizeModule();
        abort_unless($this->canCreate(), 404);

        return view('admin.crud.form', [
            'record' => null,
            'fields' => $this->resolvedFields(),
            'label' => $this->label(),
            'route' => $this->routeName(),
        ]);
    }

    public function store(Request $request)
    {
        $this->authorizeModule();
        abort_unless($this->canCreate(), 404);

        $data = $this->validated($request);
        $data = $this->handleUploads($request, $data);

        $this->model()::create($data);

        return redirect()
            ->route($this->routeName().'.index')
            ->with('success', $this->label().' has been created.');
    }

    public function edit(int $id)
    {
        $this->authorizeModule();
        abort_unless($this->canCreate(), 404);

        return view('admin.crud.form', [
            'record' => $this->model()::findOrFail($id),
            'fields' => $this->resolvedFields(),
            'label' => $this->label(),
            'route' => $this->routeName(),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->authorizeModule();
        abort_unless($this->canCreate(), 404);

        $record = $this->model()::findOrFail($id);

        $data = $this->validated($request, $record);
        $data = $this->handleUploads($request, $data, $record);

        $record->update($data);

        return redirect()
            ->route($this->routeName().'.index')
            ->with('success', $this->label().' has been updated.');
    }

    public function destroy(int $id)
    {
        $this->authorizeModule();

        $record = $this->model()::findOrFail($id);

        foreach ($this->fields() as $field) {
            if ($field['type'] === 'image') {
                $this->deleteFile($record->{$field['name']});
            }
        }

        $record->delete();

        return back()->with('success', $this->label().' has been deleted.');
    }

    /**
     * Fields shown as columns on the index table.
     */
    protected function listFields(): array
    {
        return array_values(array_filter(
            $this->fields(),
            fn ($field) => $field['list'] ?? true
        ));
    }

    /**
     * Fields with their relation dropdowns resolved into plain options.
     */
    protected function resolvedFields(): array
    {
        return array_map(function ($field) {
            if (isset($field['relation'])) {
                $related = $field['relation']['model'];
                $labelColumn = $field['relation']['label'];

                $field['type'] = 'select';
                $field['options'] = $related::orderBy($labelColumn)->pluck($labelColumn, 'id')->all();
                $field['placeholder'] = $field['placeholder'] ?? '— none —';
            }

            return $field;
        }, $this->fields());
    }

    /**
     * Run validation using the rules declared on each field.
     */
    protected function validated(Request $request, ?Model $record = null): array
    {
        $rules = [];

        foreach ($this->fields() as $field) {
            $fieldRules = $field['rules'] ?? ['nullable'];

            // On edit an image may be left untouched, so it is never required.
            if ($field['type'] === 'image') {
                $fieldRules = ['nullable', 'image', 'max:4096'];
            }

            $rules[$field['name']] = $fieldRules;
        }

        return $request->validate($rules);
    }

    /**
     * Move uploaded images onto the public disk, keeping the old file when
     * no replacement was chosen.
     */
    protected function handleUploads(Request $request, array $data, ?Model $record = null): array
    {
        foreach ($this->fields() as $field) {
            if ($field['type'] !== 'image') {
                continue;
            }

            $name = $field['name'];

            if ($request->hasFile($name)) {
                $this->deleteFile($record?->{$name});

                $data[$name] = $request->file($name)->store(
                    'uploads/'.Str::slug($this->label()),
                    'public'
                );

                continue;
            }

            // No new upload: keep whatever the record already had.
            unset($data[$name]);
        }

        return $data;
    }

    protected function deleteFile(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
