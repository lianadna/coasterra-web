<!DOCTYPE html>
<html lang="en">

@include('elements.head')

<body>
<!-- preloader start-->
@include('elements.preloader')
<!-- preloader end  -->

<!-- header-section start -->
<header class="header-section">
	<div class="top-bar d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="top-bar-content text-center">
						<div class="text-wrap">
							<img alt="icon" src="{{ asset('assets/img/icons/calendar-time.svg') }}"> <span>Join Our Event (28 Nov, 2024) New Market, California.</span>
						</div><a class="e-primary-btn is-hover-white top-btn" href="{{ route('donations') }}">Donate Now</a>
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
								<a href="{{ route('index') }}"><img alt="logo" src="{{ asset('assets/img/logo/logo.svg') }}"></a>
							</div>
							<nav class="main-menu d-none d-xl-block">
								<ul>
									<li class="has-dropdown">
										<a href="#">Home</a>
										<ul class="sub-menu">
											<li>
												<a href="{{ route('index') }}">Home 01</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="{{ route('about') }}">Who we are?</a>
									</li>
									<li>
										<a href="{{ route('services') }}">Services</a>
									</li>
									<li class="has-dropdown">
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
											<li>
												<a href="{{ route('donations') }}">Donation</a>
											</li>
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
									</li>
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
									<p><a href="tel:+1629555-0129">+1 (629) 555-0129</a></p>
								</div>
							</div>
							<div class="header-btn-wrap d-none d-xl-flex">
								<a class="e-primary-btn has-icon" href="{{ route('services') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
							<div class="header-bar open-sidebar d-none d-xl-flex" data-toggle="sidebar">
								<div class="bar bar-1"></div>
								<div class="bar bar-2"></div>
								<div class="bar bar-3"></div>
							</div>
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
<!-- header-section end -->

<!-- off-canvas-sidebar start -->
@include('elements.sidebar')
<!-- off-canvas-sidebar end -->

<!-- off-canvas-menubar start -->
@include('elements.menubar')
<!-- off-canvas-menubar end -->

<main>
	<!-- breadcrumb-section start -->
	<section class="breadcrumb-section">
		<div class="container-fluid">
			<div class="row g-0">
				<div class="col-xl-6 col-lg-6">
					<div class="breadcrumb-content" style="background-image: url(assets/img/bg/breadcrumb-bg.webp)">
						<div class="breadcrumb-nav" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<ul>
								<li><a href="{{ route('index') }}">Home</a></li>
								<li><a href="#">Camping</a></li>
							</ul>
						</div>
						<div class="breadcrumb-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
							<h2>Our Camping</h2>
						</div>
						<div class="shape-1">
							<img src="{{ asset('assets/img/shapes/shape-1.webp') }}" alt="shape"/>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 d-none d-lg-block">
					<div class="breadcrumb-thumb">
						<img src="{{ asset('assets/img/thumbs/thumb-1.webp') }}" alt="thumb"/>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-section end -->

	<!-- services-section start -->
	<section class="services-section p-t-100 p-b-120">
		<div class="container">
			<div class="row justify-content-center text-center m-b-50 m-b-xs-40">
				<div class="col-xl-8">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Camping</span>
					</div>
					<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<h2>Your Gift For a Greener Tomorrow</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				@forelse ($campings as $camping)
					@php
						$collected = $camping->collected();
						$progress = $camping->progress();
						$daysLeft = $camping->end_date && $camping->end_date->isFuture()
							? (int) now()->startOfDay()->diffInDays($camping->end_date->startOfDay())
							: null;
					@endphp
					<div class="col-xl-4 m-b-30">
						<div class="camping-card">
							<div class="thumb">
								<a href="{{ route('campingDetails', $camping) }}">
									<img alt="{{ $camping->title }}"
										src="{{ $camping->image ? Storage::url($camping->image) : asset('assets/img/thumbs/thumb-2.webp') }}">
								</a>
								<div class="category">
									<a href="{{ route('campingDetails', $camping) }}">{{ ucfirst($camping->category) }}</a>
								</div>
							</div>
							<div class="content">
								<div class="content-top">
									<div class="date">
										<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar.svg') }}">
										<span>{{ $daysLeft !== null ? $daysLeft.' Days Left' : 'Open' }}</span>
									</div>
									<div class="title">
										<h3><a href="{{ route('campingDetails', $camping) }}">{{ $camping->title }}</a></h3>
									</div>
									<div class="text">
										<p>{{ Str::limit(strip_tags($camping->description), 110) }}</p>
									</div>
								</div>
								<div class="donation-wrap">
									<div class="d-top">
										<p>Donation Complete</p>
										<p>{{ $progress }}%</p>
									</div>
									<div aria-label="Donation progress" aria-valuemax="100" aria-valuemin="0"
										aria-valuenow="{{ $progress }}" class="progress" role="progressbar">
										<div class="progress-bar" style="width: {{ $progress }}%"></div>
									</div>
									<div class="fund">
										<p>Raised: <span>Rp {{ number_format($collected, 0, ',', '.') }}</span></p>
										<p>Goal: <span>Rp {{ number_format($camping->target, 0, ',', '.') }}</span></p>
									</div>
									<div class="d-bottom">
										<a class="e-primary-btn has-icon d-btn" href="{{ route('campingDonation', $camping) }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="col-12 text-center">
						<p>No campaigns running yet.</p>
					</div>
				@endforelse
			</div>
			<div class="row justify-content-center text-center m-t-30">
				<div class="col-xl-6">
					@include('elements.pagination', ['paginator' => $campings])
				</div>
			</div>
		</div>
	</section>
	<!-- services-section end -->

	<!-- contact-info-section start -->
    @include('elements.infoSection')
	<!-- contact-info-section end -->
</main>

<!-- footer-section start -->
@include('elements.footer')
<!-- footer-section end -->

@include('elements.script')

</body>
</html>
