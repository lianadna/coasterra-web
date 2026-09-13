@extends('layout.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('page-actions')
	<a href="{{ route('index') }}" target="_blank" class="btn btn-primary btn-sm">
		<i class="bx bx-globe me-1"></i> View Website
	</a>
@endsection

@section('content')
	@php
		$tiles = [
			['label' => 'Admin Users', 'value' => $stats['admins'], 'icon' => 'bx-group', 'route' => 'admin.users.index'],
			['label' => 'Blog Posts', 'value' => $stats['blogs'], 'icon' => 'bx-news', 'route' => 'admin.blogs.index'],
			['label' => 'Projects', 'value' => $stats['projects'], 'icon' => 'bx-briefcase', 'route' => 'admin.projects.index'],
			['label' => 'Campaigns', 'value' => $stats['campaigns'], 'icon' => 'bx-leaf', 'route' => 'admin.campings.index'],
			['label' => 'Volunteers', 'value' => $stats['volunteers'], 'icon' => 'bx-user-voice', 'route' => 'admin.volunteers.index'],
			['label' => 'Messages', 'value' => $stats['messages'], 'icon' => 'bx-envelope', 'route' => 'admin.contacts.index'],
		];
	@endphp

	<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3 mb-3">
		@foreach ($tiles as $tile)
			<div class="col">
				<a href="{{ route($tile['route']) }}" class="text-decoration-none">
					<div class="card radius-10 mb-0 h-100">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between">
								<div>
									<p class="mb-1 text-secondary">{{ $tile['label'] }}</p>
									<h4 class="mb-0">{{ number_format($tile['value']) }}</h4>
								</div>
								<div class="widgets-icons bg-light-primary text-primary rounded-circle">
									<i class="bx {{ $tile['icon'] }}"></i>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		@endforeach
	</div>

	<div class="row g-3">
		<div class="col-12 col-xl-4">
			<div class="card radius-10 bg-primary bg-gradient h-100">
				<div class="card-body text-white">
					<p class="mb-1">Donations Collected</p>
					<h3 class="mb-2">Rp {{ number_format($collected, 0, ',', '.') }}</h3>
					<p class="mb-0 small">{{ $pendingDonations }} donation(s) still pending confirmation.</p>
					<a href="{{ route('admin.donations.index') }}" class="btn btn-light btn-sm mt-3">Manage donations</a>
				</div>
			</div>
		</div>

		<div class="col-12 col-xl-4">
			<div class="card radius-10 h-100">
				<div class="card-header bg-transparent"><h6 class="mb-0">Upcoming Events</h6></div>
				<div class="card-body">
					@forelse ($upcomingEvents as $event)
						<div class="d-flex align-items-start gap-2 mb-3">
							<i class="bx bx-calendar-event fs-5 text-primary"></i>
							<div>
								<div class="fw-semibold">{{ $event->title }}</div>
								<div class="small text-secondary">
									{{ $event->schedule?->format('d M Y H:i') }}
									@if ($event->camping) &middot; {{ $event->camping->title }} @endif
								</div>
							</div>
						</div>
					@empty
						<p class="text-secondary mb-0">No upcoming events scheduled.</p>
					@endforelse
					<a href="{{ route('admin.events.index') }}" class="btn btn-outline-primary btn-sm">Manage events</a>
				</div>
			</div>
		</div>

		<div class="col-12 col-xl-4">
			<div class="card radius-10 h-100">
				<div class="card-header bg-transparent"><h6 class="mb-0">Latest Messages</h6></div>
				<div class="card-body">
					@forelse ($latestMessages as $message)
						<div class="mb-3">
							<div class="fw-semibold">{{ $message->name }}</div>
							<div class="small text-secondary">{{ Str::limit($message->message, 60) }}</div>
						</div>
					@empty
						<p class="text-secondary mb-0">No messages from the contact form yet.</p>
					@endforelse
					<a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-primary btn-sm">Open inbox</a>
				</div>
			</div>
		</div>
	</div>
@endsection
