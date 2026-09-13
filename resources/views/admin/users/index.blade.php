@extends('layout.admin')

@section('title', 'Admin Users')
@section('page-title', 'Admin Users')

@section('page-actions')
	<a href="{{ route('admin.users.create') }}" class="btn btn-primary">
		<i class="bi bi-plus-lg me-1"></i> Add Admin
	</a>
@endsection

@section('content')
	<div class="card radius-10">
		<div class="card-header bg-transparent">
			<div class="d-flex align-items-center justify-content-between">
				<h6 class="mb-0">Internal Accounts</h6>
				<span class="badge bg-light text-dark">{{ $users->total() }} total</span>
			</div>
		</div>
		<div class="card-body">
			<p class="text-muted small">
				Accounts listed here are the only ones able to sign in to this control panel.
				Public sign-up is disabled &mdash; new admins must be created from this page.
			</p>

			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th style="width: 60px;">#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Roles</th>
							<th>Created</th>
							<th class="text-end" style="width: 160px;">Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($users as $user)
							<tr>
								<td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
								<td>
									<div class="d-flex align-items-center gap-2">
										<img src="{{ asset('assets/images/avatars/avatar-1.png') }}" class="rounded-circle" width="36" height="36" alt="">
										<div>
											{{ $user->name }}
											@if ($user->id === Auth::id())
												<span class="badge bg-primary ms-1">You</span>
											@endif
										</div>
									</div>
								</td>
								<td>{{ $user->email }}</td>
								<td>
									@forelse ($user->roles as $role)
										<span class="badge bg-light text-dark">{{ $role->name }}</span>
									@empty
										<span class="text-secondary small">no role</span>
									@endforelse
								</td>
								<td>{{ $user->created_at?->format('d M Y') ?? '-' }}</td>
								<td class="text-end">
									<a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-outline-primary">
										<i class="bi bi-pencil"></i>
									</a>
									@if ($user->id !== Auth::id())
										<form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="d-inline"
											onsubmit="return confirm('Delete admin account {{ $user->email }}?');">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-sm btn-outline-danger">
												<i class="bi bi-trash"></i>
											</button>
										</form>
									@endif
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="5" class="text-center text-muted py-4">No admin accounts found.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>

			@if ($users->hasPages())
				<div class="mt-3">
					{{ $users->links() }}
				</div>
			@endif
		</div>
	</div>
@endsection
