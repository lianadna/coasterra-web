<header class="header-section">
	<div class="top-bar d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="top-bar-content text-center">
						<div class="text-wrap">
							<img src="{{ asset('assets/img/icons/calendar-time.svg') }}" alt="icon"/>
							<span>Join Our Event (28 Nov, 2026) Demak, Jawa.</span>
						</div>
						<a href="{{ route('donations') }}" class="e-primary-btn is-hover-white top-btn">Donate Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="header-bottom-layout">
						<div class="header-left">
							<div class="logo-wrap">
								<a href="{{ route('index') }}">
									<img src="{{ asset('assets/img/template/logo-vector2.svg') }}" alt="logo"/>
								</a>
							</div>
							<nav class="main-menu d-none d-xl-block">
								<ul>
									<li><a href="{{ route('index') }}">Home</a></li>
									{{-- <li class="has-dropdown">
										<a href="#">Home</a>
										<ul class="sub-menu">
											<li><a href="{{ route('index') }}">Home 01</a></li>
										</ul>
									</li> --}}
									<li>
										<a href="{{ route('about') }}">Who we are?</a>
									</li>
									<li>
										<a href="{{ route('services') }}">Services</a>
									</li>
									{{-- Hide Pages & Blog --}}
									{{-- <li class="has-dropdown">
										<a href="#">Pages</a>
										<ul class="sub-menu">
											<li>
												<a href="{{ route(('servicesDetails')) }}">Services Details</a>
											</li>
											<li>
												<a href="{{ route('project') }}">Projects</a>
											</li>
											<li>
												<a href="{{ route(('projectDetails')) }}">Project Details</a>
											</li>
											<li>
												<a href="{{ route('camping') }}">Camping</a>
											</li>
											<li>
												<a href="{{ route(('campingDetails')) }}">Camping Details</a>
											</li>
											<li>
												<a href="{{ route(('campingDonation')) }}">Camping Donation</a>
											</li>
											<li><a href="{{ route('donations') }}">Donation</a></li>
											<li>
												<a href="{{ route(('beVolunteer')) }}">Become a Volunteer</a>
											</li>
											<li>
												<a href="{{ route('volunteer') }}">Volunteers</a>
											</li>
											<li>
												<a href="{{ route(('volunteerDetails')) }}">Volunteer Details</a>
											</li>
										</ul>
									</li>
									<li class="has-dropdown">
										<a href="#">Blog</a>
										<ul class="sub-menu">
											<li>
												<a href="{{ route(('blogGrid')) }}">Blog Grid</a>
											</li>
											<li>
												<a href="{{ route(('blogStandard')) }}">Blog Standard</a>
											</li>
											<li>
												<a href="{{ route(('blogDetails')) }}">Blog Details</a>
											</li>
										</ul>
									</li> --}}
									<li>
										<a href="{{ route('contact') }}">Contact Us</a>
									</li>
								</ul>
							</nav>
						</div>
						<div class="header-right">
							<div class="header-info d-none d-xl-flex">
								<div class="header-info-icon">
									<i class="fa-regular fa-phone-volume"></i>
								</div>
								<div class="header-info-content">
									<span>Contact Us!</span>
									<p>
										<a href="tel:+62888888888">+62 888 888 888</a>
									</p>
								</div>
							</div>
							<div class="header-btn-wrap d-none d-xl-flex">
								<a href="{{ route('services') }}" class="e-primary-btn has-icon">
									Explore More
									<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
								</a>
							</div>
							{{-- <div class="header-bar open-sidebar d-none d-xl-flex" data-toggle="sidebar">
								<div class="bar bar-1"></div>
								<div class="bar bar-2"></div>
								<div class="bar bar-3"></div>
							</div> --}}
							<div class="header-bar open-mobile-menu d-xl-none" data-toggle="menubar">
								<div class="bar bar-1"></div>
								<div class="bar bar-2"></div>
								<div class="bar bar-3"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>