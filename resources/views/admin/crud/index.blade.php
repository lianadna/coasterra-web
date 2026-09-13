@extends('layout.admin')

@section('title', $label)
@section('page-title', Str::plural($label))

@section('page-actions')
	@if ($canCreate)
		<a href="{{ route($route.'.create') }}" class="btn btn-primary">
			<i class="bi bi-plus-lg me-1"></i> Add {{ $label }}
		</a>
	@endif
@endsection

@section('content')
	<div class="card radius-10">
		<div class="card-header bg-transparent">
			<div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
				<h6 class="mb-0">{{ Str::plural($label) }} <span class="badge bg-light text-dark ms-1">{{ $records->total() }}</span></h6>
				<form method="GET" action="{{ route($route.'.index') }}" class="d-flex gap-2">
					<input type="search" name="q" value="{{ $search }}" class="form-control form-control-sm"
						placeholder="Search {{ Str::lower(Str::plural($label)) }}...">
					<button class="btn btn-sm btn-outline-secondary" type="submit"><i class="bi bi-search"></i></button>
					@if ($search)
						<a href="{{ route($route.'.index') }}" class="btn btn-sm btn-light">Reset</a>
					@endif
				</form>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th style="width: 60px;">#</th>
							@foreach ($fields as $field)
								<th>{{ $field['label'] }}</th>
							@endforeach
							<th class="text-end" style="width: 120px;">Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($records as $record)
							<tr>
								<td>{{ $loop->iteration + ($records->currentPage() - 1) * $records->perPage() }}</td>
								@foreach ($fields as $field)
									<td>@include('admin.crud.cell', ['field' => $field, 'record' => $record])</td>
								@endforeach
								<td class="text-end text-nowrap">
									@if ($canCreate)
										<a href="{{ route($route.'.edit', $record->id) }}" class="btn btn-sm btn-outline-primary">
											<i class="bi bi-pencil"></i>
										</a>
									@endif
									<form method="POST" action="{{ route($route.'.destroy', $record->id) }}" class="d-inline"
										onsubmit="return confirm('Delete this {{ Str::lower($label) }}?');">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="{{ count($fields) + 2 }}" class="text-center text-muted py-4">
									No {{ Str::lower(Str::plural($label)) }} yet.
									@if ($canCreate)
										<a href="{{ route($route.'.create') }}">Add the first one</a>.
									@endif
								</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>

			@if ($records->hasPages())
				<div class="mt-3">{{ $records->links() }}</div>
			@endif
		</div>
	</div>
@endsection
