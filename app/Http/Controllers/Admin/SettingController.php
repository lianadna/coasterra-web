<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private function authorizeModule(): void
    {
        abort_unless(request()->user()?->can('manage settings'), 403);
    }

    public function index()
    {
        $this->authorizeModule();

        return view('admin.settings.index', [
            'groups' => Setting::orderBy('order')->get()->groupBy('group'),
        ]);
    }

    public function update(Request $request)
    {
        $this->authorizeModule();

        $settings = Setting::all();

        $rules = [];
        foreach ($settings as $setting) {
            $rules['values.'.$setting->key] = match ($setting->type) {
                'number' => ['nullable', 'integer', 'min:0'],
                'boolean' => ['nullable', 'in:0,1'],
                'textarea' => ['nullable', 'string', 'max:5000'],
                default => ['nullable', 'string', 'max:500'],
            };
        }

        $validated = $request->validate($rules);
        $values = $validated['values'] ?? [];

        foreach ($settings as $setting) {
            // Unchecked checkboxes are simply absent from the request.
            $value = $setting->type === 'boolean'
                ? (string) (int) ($values[$setting->key] ?? 0)
                : ($values[$setting->key] ?? null);

            $setting->update(['value' => $value]);
        }

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'Site content has been updated.');
    }
}
