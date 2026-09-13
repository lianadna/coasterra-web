@extends('layout.admin')

@section('title', 'Add Admin')
@section('page-title', 'Add Admin')

@section('page-actions')
	<a href="{{ route('admin.users.index') }}" class="btn btn-outline-secondary">
		<i class="bi bi-arrow-left me-1"></i> Back
	</a>
@endsection

@section('content')
	<div class="row">
		<div class="col-12 col-lg-7">
			<div class="card radius-10">
				<div class="card-header bg-transparent">
					<h6 class="mb-0">New Internal Account</h6>
				</div>
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

					<form method="POST" action="{{ route('admin.users.store') }}" class="row g-3">
						@csrf

						<div class="col-12">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
								name="name" value="{{ old('name') }}" placeholder="Full name" required>
							@error('name')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="col-12">
							<label for="email" class="form-label">Email Address</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
								name="email" value="{{ old('email') }}" placeholder="name@example.com" required>
							@error('email')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="col-12">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror"
								id="password" name="password" placeholder="Minimum 8 characters" required>
							@error('password')
								<div class="invalid-feedback">{{ $message }}</div>
							@enderror
						</div>

						<div class="col-12">
							<label for="password_confirmation" class="form-label">Confirm Password</label>
							<input type="password" class="form-control" id="password_confirmation"
								name="password_confirmation" placeholder="Repeat the password" required>
						</div>

						<div class="col-12">
							<label class="form-label">Roles</label>
							<div class="row row-cols-1 row-cols-md-2 g-2">
								@foreach ($roles as $role)
									<div class="col">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="roles[]"
												id="role-{{ $role->id }}" value="{{ $role->name }}"
												@checked(in_array($role->name, old('roles', $assigned ?? []), true))>
											<label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
										</div>
									</div>
								@endforeach
							</div>
							<div class="form-text">A user with no role can sign in but cannot open any module.</div>
						</div>

						<div class="col-12 d-flex gap-2">
							<button type="submit" class="btn btn-primary">
								<i class="bi bi-check-lg me-1"></i> Create Admin
							</button>
							<a href="{{ route('admin.users.index') }}" class="btn btn-light">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
