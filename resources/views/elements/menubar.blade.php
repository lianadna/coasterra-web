<div class="off-canvas-menubar">
	<div class="off-canvas-menubar-body">
		<div class="off-canvas-head">
			<div class="off-canvas-logo">
				<a href="{{ route('index') }}">
					<img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo"/>
				</a>
			</div>
			<div class="off-canvas-menubar-close" data-close="menubar">
				<i class="fa-regular fa-xmark"></i>
			</div>
		</div>

		<div class="off-canvas-menu">
			<ul>
				<li class="has-dropdown">
					<a href="#">Home</a>
					<ul class="sub-menu">
						<li><a href="{{ route('index') }}">Home 01</a></li>
						<li><a href="{{ route(('index2')) }}">Home 02</a></li>
						<li><a href="{{ route(('index3')) }}">Home 03</a></li>
						<li><a href="{{ route(('index4')) }}">Home 04</a></li>
						<li><a href="{{ route(('index5')) }}">Home 05</a></li>
					</ul>
				</li>
				<li><a href="{{ route('about') }}">Who we are?</a></li>
				<li><a href="{{ route('services') }}">Services</a></li>
				<li class="has-dropdown">
					<a href="#">Pages</a>
					<ul class="sub-menu">
						<li><a href="{{ route(('servicesDetails')) }}">Services Details</a></li>
						<li><a href="{{ route('project') }}">Projects</a></li>
						<li><a href="{{ route(('projectDetails')) }}">Project Details</a></li>
						<li><a href="{{ route('camping') }}">Camping</a></li>
						<li><a href="{{ route(('campingDetails')) }}">Camping Details</a></li>
						<li><a href="{{ route(('campingDonation')) }}">Camping Donation</a></li>
						<li><a href="{{ route('donations') }}">Donation</a></li>
						<li><a href="{{ route(('beVolunteer')) }}">Become a Volunteer</a></li>
						<li><a href="{{ route('volunteer') }}">Volunteers</a></li>
						<li><a href="{{ route(('volunteerDetails')) }}">Volunteer Details</a></li>
					</ul>
				</li>
				<li class="has-dropdown">
					<a href="#">Blog</a>
					<ul class="sub-menu">
						<li><a href="{{ route(('blogGrid')) }}">Blog Grid</a></li>
						<li><a href="{{ route(('blogStandard')) }}">Blog Standard</a></li>
						<li><a href="{{ route(('blogDetails')) }}">Blog Details</a></li>
					</ul>
				</li>
				<li><a href="{{ route('contact') }}">Contact Us</a></li>
			</ul>
		</div>
	</div>
	<div class="off-canvas-menubar-overlay" data-close="menubar"></div>
</div>