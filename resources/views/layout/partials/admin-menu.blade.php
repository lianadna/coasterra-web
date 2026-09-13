@php
	/**
	 * Sidebar map: each group lists the admin resources it holds so a new
	 * module only needs one line here.
	 */
	$groups = [
		[
			'title' => 'Landing Page',
			'icon' => 'bx bx-layout',
			'items' => [
				['route' => 'admin.sliders', 'label' => 'Hero Sliders'],
				['route' => 'admin.services', 'label' => 'Services'],
				['route' => 'admin.testimonis', 'label' => 'Testimonials'],
				['route' => 'admin.partners', 'label' => 'Partners'],
				['route' => 'admin.volunteers', 'label' => 'Volunteers'],
				['route' => 'admin.achievements', 'label' => 'Achievements'],
			],
		],
		[
			'title' => 'Blog',
			'icon' => 'bx bx-news',
			'items' => [
				['route' => 'admin.blogs', 'label' => 'Posts'],
				['route' => 'admin.categories', 'label' => 'Categories'],
			],
		],
		[
			'title' => 'Projects',
			'icon' => 'bx bx-briefcase',
			'items' => [
				['route' => 'admin.projects', 'label' => 'Projects'],
				['route' => 'admin.clients', 'label' => 'Clients'],
			],
		],
		[
			'title' => 'Campaigns',
			'icon' => 'bx bx-leaf',
			'items' => [
				['route' => 'admin.campings', 'label' => 'Campaigns'],
				['route' => 'admin.events', 'label' => 'Events'],
				['route' => 'admin.organizers', 'label' => 'Organizers'],
			],
		],
		[
			'title' => 'Donations',
			'icon' => 'bx bx-donate-heart',
			'items' => [
				['route' => 'admin.donations', 'label' => 'Donations'],
				['route' => 'admin.donaturs', 'label' => 'Donors'],
				['route' => 'admin.payments', 'label' => 'Payments'],
			],
		],
		[
			'title' => 'Products',
			'icon' => 'bx bx-package',
			'items' => [
				['route' => 'admin.products', 'label' => 'Products'],
				['route' => 'admin.product-categories', 'label' => 'Product Categories'],
			],
		],
	];
@endphp

<ul class="metismenu" id="menu">
	<li class="{{ request()->routeIs('dashboard') ? 'mm-active' : '' }}">
		<a href="{{ route('dashboard') }}">
			<div class="parent-icon"><i class="bx bx-home-alt"></i></div>
			<div class="menu-title">Dashboard</div>
		</a>
	</li>

	<li class="menu-label">Content</li>

	@foreach ($groups as $group)
		@php
			$open = collect($group['items'])->contains(fn ($item) => request()->routeIs($item['route'].'.*'));
		@endphp
		<li class="{{ $open ? 'mm-active' : '' }}">
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="{{ $group['icon'] }}"></i></div>
				<div class="menu-title">{{ $group['title'] }}</div>
			</a>
			<ul class="{{ $open ? 'mm-show' : '' }}">
				@foreach ($group['items'] as $item)
					<li class="{{ request()->routeIs($item['route'].'.*') ? 'mm-active' : '' }}">
						<a href="{{ route($item['route'].'.index') }}">
							<i class="bx bx-right-arrow-alt"></i>{{ $item['label'] }}
						</a>
					</li>
				@endforeach
			</ul>
		</li>
	@endforeach

	<li class="menu-label">Communication</li>

	<li class="{{ request()->routeIs('admin.comments.*') ? 'mm-active' : '' }}">
		<a href="{{ route('admin.comments.index') }}">
			<div class="parent-icon"><i class="bx bx-message-dots"></i></div>
			<div class="menu-title">
				Comments
				@if ($pendingComments = \App\Models\Comment::where('status', 'pending')->count())
					<span class="badge bg-warning text-dark ms-1">{{ $pendingComments }}</span>
				@endif
			</div>
		</a>
	</li>
	<li class="{{ request()->routeIs('admin.subscribers.*') ? 'mm-active' : '' }}">
		<a href="{{ route('admin.subscribers.index') }}">
			<div class="parent-icon"><i class="bx bx-envelope-open"></i></div>
			<div class="menu-title">Subscribers</div>
		</a>
	</li>

	<li class="{{ request()->routeIs('admin.contacts.*') ? 'mm-active' : '' }}">
		<a href="{{ route('admin.contacts.index') }}">
			<div class="parent-icon"><i class="bx bx-envelope"></i></div>
			<div class="menu-title">
				Messages
				@if ($unreadContacts = \App\Models\Contact::count())
					<span class="badge bg-primary ms-1">{{ $unreadContacts }}</span>
				@endif
			</div>
		</a>
	</li>

	<li class="menu-label">System</li>

	<li class="{{ request()->routeIs('admin.settings.*') ? 'mm-active' : '' }}">
		<a href="{{ route('admin.settings.index') }}">
			<div class="parent-icon"><i class="bx bx-cog"></i></div>
			<div class="menu-title">Site Content</div>
		</a>
	</li>

	<li class="{{ request()->routeIs('admin.users.*') ? 'mm-active' : '' }}">
		<a href="{{ route('admin.users.index') }}">
			<div class="parent-icon"><i class="bx bx-group"></i></div>
			<div class="menu-title">Admin Users</div>
		</a>
	</li>
	<li class="{{ request()->routeIs('admin.roles.*') ? 'mm-active' : '' }}">
		<a href="{{ route('admin.roles.index') }}">
			<div class="parent-icon"><i class="bx bx-shield-quarter"></i></div>
			<div class="menu-title">Roles &amp; Permissions</div>
		</a>
	</li>
	<li>
		<a href="{{ route('index') }}" target="_blank">
			<div class="parent-icon"><i class="bx bx-globe"></i></div>
			<div class="menu-title">View Website</div>
		</a>
	</li>
</ul>
