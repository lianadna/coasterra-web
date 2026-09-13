@extends('layout.admin')

@section('title', 'Roles')
@section('page-title', 'Roles & Permissions')

@section('page-actions')
	<a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm">
		<i class="bi bi-plus-lg me-1"></i> Add Role
	</a>
@endsection

@section('content')
	<div class="card radius-10">
		<div class="card-body">
			<p class="text-secondary small">
				A role bundles permissions. The <strong>Admin</strong> role always keeps every
				permission, so you cannot lock yourself out of the panel.
			</p>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th style="width: 60px;">#</th>
							<th>Role</th>
							<th>Permissions</th>
							<th>Users</th>
							<th class="text-end" style="width: 120px;">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($roles as $role)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>
									{{ $role->name }}
									@if ($role->name === 'Admin')
										<span class="badge bg-primary ms-1">full access</span>
									@endif
								</td>
								<td>{{ $role->permissions_count }}</td>
								<td>{{ $role->users_count }}</td>
								<td class="text-end text-nowrap">
									<a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-outline-primary">
										<i class="bi bi-pencil"></i>
									</a>
									@if ($role->name !== 'Admin')
										<form method="POST" action="{{ route('admin.roles.destroy', $role) }}" class="d-inline"
											onsubmit="return confirm('Delete role {{ $role->name }}?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
										</form>
									@endif
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@if ($roles->hasPages())
				<div class="mt-3">{{ $roles->links() }}</div>
			@endif
		</div>
	</div>
@endsection
