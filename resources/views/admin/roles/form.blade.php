@extends('layout.admin')

@section('title', $role ? 'Edit Role' : 'Add Role')
@section('page-title', $role ? 'Edit Role' : 'Add Role')

@section('page-actions')
	<a href="{{ route('admin.roles.index') }}" class="btn btn-outline-secondary btn-sm">
		<i class="bi bi-arrow-left me-1"></i> Back
	</a>
@endsection

@section('content')
	<div class="row">
		<div class="col-12 col-xl-8">
			<div class="card radius-10">
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul class="mb-0 ps-3">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form method="POST" action="{{ $role ? route('admin.roles.update', $role) : route('admin.roles.store') }}">
						@csrf
						@if ($role)
							@method('PUT')
						@endif

						<div class="mb-3">
							<label for="name" class="form-label">Role Name <span class="text-danger">*</span></label>
							<input type="text" class="form-control" id="name" name="name"
								value="{{ old('name', $role?->name) }}"
								{{ $role?->name === 'Admin' ? 'readonly' : '' }} required>
						</div>

						<label class="form-label">Permissions</label>
						@if ($role?->name === 'Admin')
							<p class="text-secondary small">The Admin role always holds every permission.</p>
						@endif
						<div class="row row-cols-1 row-cols-md-2 g-2 mb-3">
							@foreach ($permissions as $permission)
								<div class="col">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" name="permissions[]"
											id="perm-{{ $permission->id }}" value="{{ $permission->name }}"
											@checked(in_array($permission->name, old('permissions', $assigned), true))>
										<label class="form-check-label" for="perm-{{ $permission->id }}">
											{{ ucfirst($permission->name) }}
										</label>
									</div>
								</div>
							@endforeach
						</div>

						<div class="d-flex gap-2">
							<button type="submit" class="btn btn-primary">
								<i class="bi bi-check-lg me-1"></i> {{ $role ? 'Save Changes' : 'Create Role' }}
							</button>
							<a href="{{ route('admin.roles.index') }}" class="btn btn-light">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
