<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="{{ asset('assets/images/favicon-32x32.png') }}" type="image/png" />
	<link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets/js/pace.min.js') }}"></script>
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
	<title>Coasterra Admin - @yield('title', 'Dashboard')</title>
	@stack('styles')
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Coasterra</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i></div>
			</div>
			@include('layout.partials.admin-menu')
		</div>
		<!--end sidebar wrapper -->

		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item">
								<a class="nav-link" href="{{ route('index') }}" target="_blank" title="View website">
									<i class='bx bx-globe'></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
							role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ Auth::user()->image ? Storage::url(Auth::user()->image) : asset('assets/images/avatars/avatar-2.png') }}"
								class="user-img" alt="user avatar">
							<div class="user-info ps-3">
								<p class="user-name mb-0">{{ Auth::user()->name }}</p>
								<p class="designattion mb-0">{{ Auth::user()->email }}</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li>
								<a class="dropdown-item" href="{{ route('admin.users.edit', Auth::id()) }}">
									<i class="bx bx-user"></i><span>Profile</span>
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{ route('admin.users.index') }}">
									<i class="bx bx-group"></i><span>Admin Users</span>
								</a>
							</li>
							<li><div class="dropdown-divider mb-0"></div></li>
							<li>
								<form method="POST" action="{{ route('logout') }}">
									@csrf
									<button type="submit" class="dropdown-item">
										<i class="bx bx-log-out-circle"></i><span>Logout</span>
									</button>
								</form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="page-breadcrumb d-flex align-items-center justify-content-between mb-3 flex-wrap gap-2">
					<div class="breadcrumb-title pe-3">@yield('page-title', 'Dashboard')</div>
					<div class="ms-auto">@yield('page-actions')</div>
				</div>

				@if (session('success'))
					<div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
						<div class="d-flex align-items-center">
							<div class="fs-3 text-white"><i class="bx bx-check-circle"></i></div>
							<div class="ms-3"><div class="text-white">{{ session('success') }}</div></div>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					</div>
				@endif

				@if (session('error'))
					<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
						<div class="d-flex align-items-center">
							<div class="fs-3 text-white"><i class="bx bx-error"></i></div>
							<div class="ms-3"><div class="text-white">{{ session('error') }}</div></div>
						</div>
						<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					</div>
				@endif

				@yield('content')
			</div>
		</div>
		<!--end page wrapper -->

		<footer class="page-footer">
			<p class="mb-0">Copyright &copy; {{ date('Y') }} Coasterra. All rights reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
	@stack('scripts')
</body>

</html>
