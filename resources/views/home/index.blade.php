<!DOCTYPE html>
<html lang="en">

    @include('elements.head')
	
<body>
	
{{-- <!-- preloader start-->
@include('elements.preloader') --}}
<!-- preloader end  -->

<!-- header-section start -->
<header class="header-section-1">
	<div class="top-bar d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="top-bar-content text-center">
						<div class="text-wrap">
							<img src="{{ asset('assets/img/icons/calendar-time.svg') }}" alt="icon"/>
							<span>Join Our Event (28 Nov, 2026) Demak, Jawa.</span>
						</div>
						<a href="{{ route('donations') }}" class="e-primary-btn is-hover-white top-btn">
							Donate Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom-layout-2">
		<div class="header-left">
			<div class="logo-wrap-2">
				<a href="{{ route('index') }}">
					<img src="{{ asset('assets/img/template/logo-vector.svg') }}" alt="logo"/>
				</a>
			</div>
		</div>
		<div class="w-100 d-none d-xl-block">
			<div class="header-middle">
				<nav class="main-menu-2 d-none d-xl-block">
					<ul style="display: flex; flex-wrap: wrap; gap: 24px;">
						<li><a href="{{ route('index') }}">Home</a></li>
						<li><a href="{{ route('about') }}">Who we are?</a></li>
						<li><a href="{{ route('services') }}">Services</a></li>
						{{-- Hide Pages & Blog --}}
						{{-- <li class="has-dropdown">
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
						</li> --}}
						<li><a href="{{ route('contact') }}">Contact Us</a></li>
					</ul>
				</nav>
				<div class="header-info-wrap">
					<div class="header-info-3 d-none d-xl-flex">
						<div class="header-info-icon">
							<i class="fa-regular fa-phone-volume"></i>
						</div>
						<div class="header-info-content">
							<span>Contact Us!</span>
							<p><a href="tel:+6288888888888">+628 888 888 8888</a></p>
						</div>
					</div>
					<div class="header-btn-wrap d-none d-xl-flex">
						<a href="{{ route('about') }}" class="e-primary-btn has-icon">
							Explore More
							<span class="icon-wrap">
								<span class="icon">
									<i class="fa-regular fa-arrow-right"></i>
									<i class="fa-regular fa-arrow-right"></i>
								</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="header-right">
			{{-- <div class="header-bar-3 d-none d-xl-flex" data-toggle="sidebar">
				<div class="bar bar-1"></div>
				<div class="bar bar-2"></div>
				<div class="bar bar-3"></div>
			</div> --}}
			<div class="header-bar-3 d-xl-none" data-toggle="menubar">
				<div class="bar bar-1"></div>
				<div class="bar bar-2"></div>
				<div class="bar bar-3"></div>
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
	<!-- hero-section start -->
	<section class="hero-slider-active-1">
		<div class="swiper">
			<div class="swiper-wrapper">
				@forelse ($sliders as $slider)
					<div class="swiper-slide">
						<div class="hero-side" style="background-image: url('{{ $slider->image ? Storage::url($slider->image) : asset('assets/img/template/hero-1.png') }}')">
							<div class="container">
								<div class="row">
									<div class="col-xl-12">
										<div class="hero-content-1">
											@if ($slider->label)
												<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.3s">
													<img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon-1"/>
													<span>{{ $slider->label }}</span>
												</div>
											@endif
											@php
												// A pipe in the title marks the part rendered as the accent colour.
												[$titleMain, $titleAccent] = array_pad(explode('|', $slider->title, 2), 2, null);
											@endphp
											<div class="title" data-animation="animate__fadeInUp" data-delay="0.4s">
												<h1>
													{{ trim($titleMain) }}
													@if ($titleAccent)
														<span>{{ trim($titleAccent) }}</span>
													@endif
												</h1>
											</div>
											@if ($slider->description)
												<div class="text" data-animation="animate__fadeInUp" data-delay="0.5s">
													<p>{{ $slider->description }}</p>
												</div>
											@endif
											<div class="join-us" data-animation="animate__fadeInUp" data-delay="0.6s">
												<a href="{{ route('donations') }}" class="e-primary-btn has-icon">
													Join Us Today
													<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="group-shape-1">
								<img src="{{ asset('assets/img/shapes/group-shape-1.webp') }}" alt="group-shape-1"/>
							</div>
							<div class="s-shape-1">
								<img src="{{ asset('assets/img/shapes/shape-2.webp') }}" alt="s-shape-1"/>
							</div>
						</div>
					</div>
				@empty
					<div class="swiper-slide">
						<div class="hero-side" style="background-image: url('{{ asset('assets/img/template/hero-1.png') }}')">
							<div class="container">
								<div class="row">
									<div class="col-xl-12">
										<div class="hero-content-1">
											<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.3s">
												<img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon-1"/>
												<span>Let's Build Coastal Resilience</span>
											</div>
											<div class="title" data-animation="animate__fadeInUp" data-delay="0.4s">
												<h1>Turning Climate Commitments <span>into Coastal Impact</span></h1>
											</div>
											<div class="text" data-animation="animate__fadeInUp" data-delay="0.5s">
												<p>We turn climate commitments into practical, evidence-based action across Indonesia's coastal ecosystems.</p>
											</div>
											<div class="join-us" data-animation="animate__fadeInUp" data-delay="0.6s">
												<a href="{{ route('donations') }}" class="e-primary-btn has-icon">
													Join Us Today
													<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="group-shape-1">
								<img src="{{ asset('assets/img/shapes/group-shape-1.webp') }}" alt="group-shape-1"/>
							</div>
							<div class="s-shape-1">
								<img src="{{ asset('assets/img/shapes/shape-2.webp') }}" alt="s-shape-1"/>
							</div>
						</div>
					</div>
				@endforelse
			</div>
		</div>
		<div class="hero-slider-pagination-1"></div>
		<div class="hero-slider-social">
			<div class="social-links">
				<a href="https://facebook.com">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a href="https://twitter.com">
					<i class="fab fa-x-twitter"></i>
				</a>
				<a href="https://www.instagram.com">
					<i class="fab fa-instagram"></i>
				</a>
				<a href="https://linkedin.com">
					<i class="fab fa-linkedin-in"></i>
				</a>
			</div>
			<div class="text">Join Social:</div>
		</div>
	</section>
	<!-- hero-section end -->

	<!-- about-us-section start -->
	<section class="about-us-section m-t-120 m-t-md-100 m-t-xs-80">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6">
					<div class="shape-wrapped-thumb-1" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<img src="{{ asset('assets/img/template/about1.png') }}" alt="thumb"/>
						{{-- <div class="experience-shape-2">
							<h3>
								<span class="purecounter" data-purecounter-duration="2" data-purecounter-end="29">0</span>+
							</h3>
							<p>Years of experience</p>
						</div> --}}
						{{-- <div class="award-shape" style="background-image: url(assets/img/shapes/shape-18.webp)">
							<img src="{{ asset('assets/img/icons/icon-6.svg') }}" alt="icon"/>
							<p>2026-We are the best award winner</p>
						</div> --}}
						<div class="box-shape">
							<img src="{{ asset('assets/img/shapes/shape-14.webp') }}" alt="box-shape"/>
						</div>
						<div class="positioned-shape">
							<div class="shape-wrapped-thumb-2">
								<div class="video-thumb">
									<img src="{{ asset('assets/img/template/about2.png') }}" alt="thumb"/>
									<a href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity" data-fancybox="" class="video-play-btn">
										<i class="fa-solid fa-play"></i>
									</a>
								</div>
								<div class="vector-shape">
									<img src="{{ asset('assets/img/shapes/shape-19.webp') }}" alt="vector-shape"/>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6" id="about">
					<div class="about-us-content px-xxl-5 px-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<div class="common-subtitle">
							<img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-2"/>
						<span>{{ setting('about_subtitle', 'About Us') }}</span>
						</div>
						<div class="common-title text-start">
						<h2>{{ setting('about_title', 'Building a Greener Future Together') }}</h2>
						</div>
					<div class="c-tabs-wrapper">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							@foreach ([1, 2, 3] as $tab)
								<li class="nav-item" role="presentation">
									<button class="nav-link {{ $tab === 1 ? 'active' : '' }}" id="c-tab-{{ $tab }}"
										data-bs-toggle="tab" data-bs-target="#c-tab-{{ $tab }}-pane" type="button"
										role="tab" aria-controls="c-tab-{{ $tab }}-pane"
										aria-selected="{{ $tab === 1 ? 'true' : 'false' }}">
										{{ setting('about_tab'.$tab.'_title', 'Tab '.$tab) }}
									</button>
								</li>
							@endforeach
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="c-tab-1-pane" role="tabpanel"
								aria-labelledby="c-tab-1" tabindex="0">
								<div class="text">
									<p>{{ setting('about_tab1_text') }}</p>
								</div>
							</div>
							<div class="tab-pane fade" id="c-tab-2-pane" role="tabpanel"
								aria-labelledby="c-tab-2" tabindex="0">
								<div class="benefits">
									<ul>
										@foreach (setting_lines('about_tab2_list') as $point)
											<li>{{ $point }}</li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="tab-pane fade" id="c-tab-3-pane" role="tabpanel"
								aria-labelledby="c-tab-3" tabindex="0">
								<div class="text">
									<p>{{ setting('about_tab3_text') }}</p>
								</div>
							</div>
						</div>
					</div>
						<div class="annual-donation-wrap">
							<a href="#about" class="e-primary-btn has-icon">
								Explore More
								<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
							</a>
							<div class="rating-wrap">
								<div class="star-rating">
									<img src="{{ asset('assets/img/logo/logo-8.svg') }}" alt="logo"/>
									<div class="stars">
										<i class="fa-solid fa-star-sharp"></i>
										<i class="fa-solid fa-star-sharp"></i>
										<i class="fa-solid fa-star-sharp"></i>
										<i class="fa-solid fa-star-sharp"></i>
										<i class="fa-solid fa-star-sharp"></i>
									</div>
								</div>
						<p>{{ setting('about_rating_text', 'Excellent 4.9 out of 5') }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-us-section end -->

	<!-- company-achievements-section start -->
	<section class="company-achievements-section m-t-60">
		<div class="container">
			<div class="company-achievements" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
			@php
				$achievementIcons = [
					'fa-light fa-chart-mixed',
					'fa-light fa-lightbulb-exclamation-on',
					'fa-light fa-thumbs-up',
					'fa-light fa-users-medical',
				];
			@endphp
			@foreach ($achievements as $achievement)
				<div class="achievement">
					<i class="{{ $achievementIcons[$loop->index % count($achievementIcons)] }}"></i>
					<h2>
						<span class="purecounter" data-purecounter-duration="2"
							data-purecounter-end="{{ $achievement->value }}">0</span>{{ $achievement->suffix }}
					</h2>
					<p>{{ $achievement->label }}</p>
				</div>
			@endforeach
			</div>
		</div>
	</section>
	<!-- company-achievements-section end -->

	<!-- what-we-do-section start -->
	<section class="what-we-do-section m-t-80 p-t-100 p-b-120 p-b-md-100 p-t-xs-80 p-b-xs-80" style="background-image: url(assets/img/template/dark-green2.png)">
		<div class="container" id ="wedo">
			<div class="section-top-2">
				<div class="left">
					<div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon-1"/>
						<span>What We Do</span>
					</div>
						<div class="common-title text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<h2>We Offer Services to Transform Climate Commitments</h2>

					</div>
				</div>
				<div class="right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
					<p>
						Into practical, evidence-based action across Indonesia's coastal ecosystems.
					</p>
					<a href="{{ route('services') }}" class="service-btn e-primary-btn has-icon">
						View All Service
						<span class="icon-wrap">
							<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
		                </span>
					</a>
				</div>
			</div>
			<div class="row row-gap-md-5 row-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
					@forelse ($services as $service)
						<div class="col-xl-4 col-md-6 col-sm-12">
							<div class="project-card">
								<div class="thumb">
									<a href="{{ route('servicesDetails', $service) }}">
										<img src="{{ $service->image ? Storage::url($service->image) : asset('assets/img/template/service-1.png') }}"
											alt="{{ $service->title }}"/>
									</a>
									<div class="number">
										<a href="{{ route('servicesDetails', $service) }}">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</a>
									</div>
									<div class="content">
										<h5>{{ $service->title }}</h5>
										<p>{{ $service->subtitle ?: Str::limit(strip_tags($service->description), 80) }}</p>
										<div class="details-btn">
											<a href="{{ route('servicesDetails', $service) }}" class="e-primary-btn has-icon is-hover-white">
												Read More
												<span class="icon-wrap">
													<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
												</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					@empty
						<div class="col-12">
							<p>No services published yet.</p>
						</div>
					@endforelse
			</div>
		</div>
		<div class="shape-10">
			<img src="{{ asset('assets/img/shapes/shape-10.webp') }}" alt="shape-10"/>
		</div>
		<div class="shape-11">
			<img src="{{ asset('assets/img/shapes/shape-11.webp') }}" alt="shape-11"/>
		</div>
	</section>
	<!-- what-we-do-section end -->

	<!-- why-us-section start -->
	<section class="why-us-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url(assets/img/template/stay.png)" id="stay">
		<div class="container">
			<div class="row row-gap-5 align-items-center">
				<div class="col-xl-6">
					<div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="thumb-1">
							<img alt="thumb-1" src="{{ asset('assets/img/template/stay1.png') }}">
							<div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
						</div>
						<div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/img/template/stay2.png') }}"></div>
						<div class="thumb-3">
							<div class="shape-wrapped-thumb">
								<img alt="thumb-3" src="{{ asset('assets/img/template/stay3.png') }}">
								<div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-13.webp') }}"></div>
								<div class="s-shape-2"><img alt="shape-2" src="{{ asset('assets/img/shapes/shape-15.webp') }}"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle">
							<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Why Stay With Us?</span>
						</div>
						<div class="common-title text-start">
							<h2>Reasons to Choose Coasterra</h2>
						</div>
						<div class="text">
							<p>We combine science, ecosystems, and community collaboration 
								to build resilient coastlines and create measurable environmental and social impact</p>
						</div>
						<div class="services" style="align-items: flex-start;">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Community Empowerment</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Climate Solutions</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Ecosystem Restoration</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Data Science</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Governance Support</p>
								</div>
							</div>
						</div>
						<div class="annual-donation-wrap">
							<a class="e-primary-btn has-icon" href="#stay">Explore All Post
								<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							{{-- <div class="annual-donation">
								<img alt="icon-4" src="{{ asset('assets/img/icons/icon-4.svg') }}">
								<div class="annual-text">
									<p>Annual Donation</p>
									<h5>$2,000,00</h5>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- why-us-section end -->

	<!-- our-camping start -->
	<section class="our-camping-section overflow-x-clip p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url(assets/img/template/dark-forest.png)">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="text-center">
						<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Camping</span>
						</div>
						<div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Turn Your Commitment into Coastal Impact</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="camping-slider-active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
							@forelse ($campings as $camping)
								@php
									$collected = $camping->collected();
									$progress = $camping->progress();
									$daysLeft = $camping->end_date && $camping->end_date->isFuture()
										? (int) now()->startOfDay()->diffInDays($camping->end_date->startOfDay())
										: null;
								@endphp
								<div class="swiper-slide">
									<div class="camping-card">
										<div class="thumb">
											<a href="{{ route('campingDonation', $camping) }}">
												<img alt="{{ $camping->title }}"
													src="{{ $camping->image ? Storage::url($camping->image) : asset('assets/img/template/camping-energy.png') }}">
											</a>
											<div class="category">
												<a href="{{ route('campingDonation', $camping) }}">{{ ucfirst($camping->category) }}</a>
											</div>
										</div>
										<div class="content">
											<div class="content-top">
												<div class="date">
													<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar.svg') }}">
													<span>{{ $daysLeft !== null ? $daysLeft.' Days Left' : 'Open' }}</span>
												</div>
												<div class="title">
													<h3><a href="{{ route('campingDonation', $camping) }}">{{ $camping->title }}</a></h3>
												</div>
												<div class="text">
													<p>{{ Str::limit(strip_tags($camping->description), 90) }}</p>
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
													<a class="e-primary-btn has-icon d-btn" href="{{ route('campingDonation', $camping) }}">
														Donate Now
														<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							@empty
								<div class="swiper-slide">
									<div class="camping-card">
										<div class="content">
											<div class="content-top">
												<div class="title"><h3>No campaigns running yet</h3></div>
												<div class="text"><p>Campaigns created from the admin panel will appear here.</p></div>
											</div>
										</div>
									</div>
								</div>
							@endforelse
							</div>
						</div>
						<div class="camping-pagination-wrap">
							<div class="camping-pagination"></div>
						</div>
						<div class="camping-button-prev">
							<i class="fa-regular fa-arrow-left"></i>
						</div>
						<div class="camping-button-next">
							<i class="fa-regular fa-arrow-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our-camping end -->

	<!-- volunteer-section start -->
	<section class="volunteer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
		<div class="container text-center">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>We Are Volunteer</span>
				</div>
				<div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Together For The Nature</h2>
				</div>
			</div>
			<div class="row row-gap-4 p-b-60" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					@forelse ($volunteers as $volunteer)
						<div class="col-xl-3 col-lg-4 col-md-6">
							<div class="volunteer-card">
								<a href="{{ route('volunteerDetails', $volunteer) }}">
									<div class="thumb">
										<img alt="{{ $volunteer->name }}"
											src="{{ $volunteer->image ? Storage::url($volunteer->image) : asset('assets/img/template/Jose Prima.png') }}">
									</div>
									<div class="author-info">
										<h5>{{ $volunteer->name }}</h5>
										<p>{{ $volunteer->role }}</p>
									</div>
								</a>
								<div class="socials">
									<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
									<div class="social-links">
										@if ($volunteer->instagram_url)
											<a href="{{ $volunteer->instagram_url }}" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
										@endif
										@if ($volunteer->linkedin_url)
											<a href="{{ $volunteer->linkedin_url }}" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
										@endif
									</div>
								</div>
							</div>
						</div>
					@empty
						<div class="col-12">
							<p>No volunteers listed yet.</p>
						</div>
					@endforelse
			</div>
			<div class="contact-details" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="details-btn">
					<a class="e-primary-btn has-icon" href="{{ route('volunteer') }}">View All Volunteer
						<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
				<div class="join-us-btn">
					<img alt="shape-12" src="{{ asset('assets/img/shapes/shape-12.webp') }}">
					<a class="review-btn" href="{{ route(('beVolunteer')) }}"><span>If you want can join us</span>
						<i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section end -->

	<!-- completed-project start -->
	{{-- <section class="completed-project-section" id="project-session">
		<div class="completed-project-top" style="background-image: url(assets/img/bg/completed-project-bg.webp)">
			<div class="container">
				<div class="row align-items-end m-b-60 m-b-xs-40">
					<div class="col-xl-6 col-lg-6 col-md-7">
						<div class="common-subtitle style-color-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<img alt="icon-1" src="{{ asset('assets/img/icons/icon-1.svg') }}"> <span>Completed Project</span>
						</div>
						<div class="common-title style-color-light text-start m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Explore Our Successful Camping Project😍</h2>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
						<a class="e-primary-btn is-hover-white has-icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" href="{{ route('project') }}">View
							All Projects
							<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
					</div>
				</div>
			</div>
			<div class="shape-8"><img alt="shape-8" src="{{ asset('assets/img/shapes/shape-8.webp') }}"></div>
			<div class="shape-9"><img alt="shape-9" src="{{ asset('assets/img/shapes/shape-9.webp') }}"></div>
		</div>
		<div class="completed-project-bottom">
			<div class="completed-project-slider-active" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="project-card">
								<div class="thumb">
									<a href="{{ route('project') }}"><img alt="thumb-11" src="{{ asset('assets/img/thumbs/thumb-11.webp') }}"></a>
									<div class="number">
										<a href="{{ route('project') }}">No - 02</a>
									</div>
									<div class="content">
										<h5>Forest Cleaning</h5>
										<p>Energy consulting involves providing of advice and guidance on energy</p>
										<div class="details-btn">
											<a class="e-primary-btn is-hover-white has-icon" href="{{ route('project') }}">View
												All Projects
												<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="project-card">
								<div class="thumb">
									<a href="{{ route('project') }}"><img alt="thumb-12" src="{{ asset('assets/img/thumbs/thumb-12.webp') }}"></a>
									<div class="number">
										<a href="{{ route('project') }}">No - 03</a>
									</div>
									<div class="content">
										<h5>Waste Management</h5>
										<p>Energy consulting involves providing of advice and guidance on energy</p>
										<div class="details-btn">
											<a class="e-primary-btn is-hover-white has-icon" href="{{ route('project') }}">View
												All Projects
												<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="project-card">
								<div class="thumb">
									<a href="{{ route('project') }}"><img alt="thumb-13" src="{{ asset('assets/img/thumbs/thumb-13.webp') }}"></a>
									<div class="number">
										<a href="{{ route('project') }}">No - 04</a>
									</div>
									<div class="content">
										<h5>Cleaning & Recycling</h5>
										<p>Energy consulting involves providing of advice and guidance on energy</p>
										<div class="details-btn">
											<a class="e-primary-btn is-hover-white has-icon" href="{{ route('project') }}">View
												All Projects
												<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="project-card">
								<div class="thumb">
									<a href="{{ route('project') }}"><img alt="thumb-12" src="{{ asset('assets/img/thumbs/thumb-12.webp') }}"></a>
									<div class="number">
										<a href="{{ route('project') }}">No - 03</a>
									</div>
									<div class="content">
										<h5>Waste Management</h5>
										<p>Energy consulting involves providing of advice and guidance on energy</p>
										<div class="details-btn">
											<a class="e-primary-btn is-hover-white has-icon" href="{{ route('project') }}">View
												All Projects
												<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="completed-project-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- completed-project end -->
	
	<!-- completed-project start -->
	<section class="completed-project-section" id="project-session">
		<div class="completed-project-top" style="background-image: url(assets/img/template/dark-green2.png)">
			<div class="container">
				<div class="row align-items-end m-b-60 m-b-xs-40">
					<div class="col-xl-6 col-lg-6 col-md-7">
						<div class="common-subtitle style-color-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<img alt="icon-1" src="{{ asset('assets/img/icons/icon-1.svg') }}"> <span>Project</span>
						</div>
						<div class="common-title style-color-light text-start m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Explore Our Project😍</h2>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-5 text-md-end">
						<a class="e-primary-btn is-hover-white has-icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" href="#project-session">View
							All Projects
							<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
					</div>
				</div>
			</div>
			<div class="shape-8"><img alt="shape-8" src="{{ asset('assets/img/shapes/shape-8.webp') }}"></div>
			<div class="shape-9"><img alt="shape-9" src="{{ asset('assets/img/shapes/shape-9.webp') }}"></div>
		</div>
		<div class="completed-project-bottom">
			<div class="completed-project-slider-active" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
				<div class="swiper">
					<div class="swiper-wrapper">
						@forelse ($projects as $project)
							<div class="swiper-slide">
								<div class="project-card">
									<div class="thumb">
										<a href="{{ route('projectDetails', $project) }}">
											<img alt="{{ $project->title }}"
												src="{{ $project->image ? Storage::url($project->image) : asset('assets/img/template/project_demak2.png') }}">
										</a>
										<div class="number">
											<a href="{{ route('projectDetails', $project) }}">
												{{ ['done' => 'Completed', 'ongoing' => 'On Going', 'soon' => 'Coming Soon'][$project->status] ?? $project->status }}
											</a>
										</div>
										<div class="content">
											<h5>{{ $project->title }}</h5>
											<p>{{ Str::limit(strip_tags($project->description), 150) }}</p>
											<div class="details-btn">
												<a class="e-primary-btn is-hover-white has-icon" href="{{ route('projectDetails', $project) }}">View
													Project
													<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						@empty
							<div class="swiper-slide">
								<div class="project-card">
									<div class="thumb">
										<div class="content">
											<h5>No projects published yet</h5>
											<p>Projects added from the admin panel will appear here.</p>
										</div>
									</div>
								</div>
							</div>
						@endforelse
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="completed-project-pagination"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- completed-project end -->

	<!-- testimonial start -->
	<section class="testimonial p-t-120 p-t-md-100 p-t-xs-80">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-xl-4 m-b-lg-60 m-b-md-60 m-b-xs-60">
					<div class="testimonial-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="common-subtitle">
							<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Testimonials</span>
						</div>
						<div class="common-title text-start">
							<h2>Why They Believe <span><i class="fa-solid fa-quote-right"></i> In Us</span></h2>
						</div>
						<div class="text">
							<p>Be part of our journey by sharing your experience with Coasterra.</p>
						</div>
						<div class="reviews">
							<h3>
								<span class="purecounter" data-purecounter-duration="1" data-purecounter-end="99">0</span>%
							</h3><img alt="favicon" src="{{ asset('assets/img/logo/favicon.webp') }}">
							<h5>Positive Reviews</h5>
						</div>
						<a class="review-btn" href="{{ route('contact') }}"><img alt="icon" src="{{ asset('assets/img/icons/icon-3.svg') }}">
							<span><span>Write your honest review</span> <i class="fa-solid fa-arrow-right-long"></i></span></a>
					</div>
				</div>
				<div class="col-xl-8">
					<div class="testimonial-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								@forelse ($testimonis as $testimoni)
									<div class="swiper-slide">
										<div class="testimonial-card">
											<div class="thumb">
												<img alt="{{ $testimoni->name }}"
													src="{{ $testimoni->image ? Storage::url($testimoni->image) : asset('assets/img/thumbs/thumb-testi-1.svg') }}">
												@if ($testimoni->video)
													<a class="video-play-btn" data-fancybox="" href="{{ $testimoni->video }}">Play</a>
												@endif
											</div>
											<div class="card-content">
												<div class="rating">
													<p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>{{ number_format((float) $testimoni->rating, 1) }}</span>
												</div>
												<div class="review">
													<p>{{ $testimoni->description }}</p>
												</div>
												<div class="author-details">
													<h5>{{ $testimoni->name }}</h5>
													<h6>{{ $testimoni->role }}</h6>
												</div>
											</div>
										</div>
									</div>
								@empty
									<div class="swiper-slide">
										<div class="testimonial-card">
											<div class="card-content">
												<div class="review"><p>No testimonials published yet.</p></div>
											</div>
										</div>
									</div>
								@endforelse
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonial end -->

	<!-- major-partners start -->
	<section class="major-partners p-t-80 p-b-140 p-b-lg-120 p-b-md-100 p-b-xs-80">
		<div class="container">
			<div class="partners-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="line-right"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
				<h3>Major Partners</h3>
				<div class="line"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
			</div>
			<div class="row p-t-60 p-b-60">
				<div class="col-xl-12">
					<div class="partner-marquee">
						@include('elements.partner-marquee')
					</div>
				</div>
			</div>
			<div class="partner-btn text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<a class="e-primary-btn has-icon" href="{{ route('contact') }}">
					Become a Partner
					<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
				</a>
			</div>
		</div>
	</section>
	<!-- major-partners end -->

	<!-- contact-us start -->
	<section class="contact-us" style="background-image: url(assets/img/bg/contact-us-bg-new.svg)">
		<div class="container">
			<div class="contact-form" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="form-content">
					<div class="form-content-top">
						<h3>Contact Us<br>
							<span>Let's Connect</span></h3>
						<p>Have questions, feedback, or ideas? We'd love to hear from you.</p>
					</div>
					@if (session('contact_success'))
						<div class="alert alert-success">{{ session('contact_success') }}</div>
					@endif
					@if ($errors->contact->any())
						<div class="alert alert-danger">
							<ul class="mb-0 ps-3">
								@foreach ($errors->contact->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<form id="contact-form" action="{{ route('contact.store') }}" method="post">
						@csrf
						<div class="input-wrap-3 m-b-15">
							<input placeholder="Your Name" type="text" name="name" value="{{ old('name') }}" required>
						</div>
						<div class="input-wrap-3 m-b-15">
							<input placeholder="example@email.com" type="email" name="email" value="{{ old('email') }}" required>
						</div>
						<div class="input-wrap-3 m-b-15">
							<input placeholder="+62 xxx xxx xxxx" type="text" name="number" value="{{ old('number') }}">
						</div>
						<div class="input-wrap-3 m-b-15">
							<textarea placeholder="Write your message..." name="message" required>{{ old('message') }}</textarea>
						</div>
						<button class="e-primary-btn is-hover-white has-icon" type="submit">Submit Now
							<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
						</button>
					</form>
					<div class="shape"><img alt="shape-5" src="{{ asset('assets/img/shapes/shape-5.webp') }}"></div>
				</div>
			</div>
		</div>
		<div class="shape-6"><img alt="shape-6" src="{{ asset('assets/img/shapes/shape-6.webp') }}"></div>
		<div class="shape-7"><img alt="shape-7" src="{{ asset('assets/img/shapes/shape-7.webp') }}"></div>
	</section>
	<!-- contact-us end -->

	<!-- our-events-section start -->
	<section class="our-events-section p-t-120 p-t-md-100 p-t-xs-80 p-b-120 p-b-md-100 p-b-xs-80">
		<div class="container text-center">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Upcoming Event</span>
				</div>
				<div class="common-title text-center m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Our Events, Let's <img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> All Participate</h2>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					@forelse ($events as $event)
						<div class="col-lg-6 col-12">
							<div class="event-card">
								<div class="card-content">
									<div class="event-card-top">
										<div class="top-left">
											<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar-2.svg') }}">
											<div class="event-date">
												<h3>{{ $event->schedule?->format('d') ?? '--' }} <span>{{ $event->schedule?->format('F') }}<br>
												in {{ $event->schedule?->format('Y') }}</span></h3>
											</div>
										</div>
										@if ($event->organizer)
											<div class="top-right">
												<img alt="{{ $event->organizer->name }}"
													src="{{ $event->organizer->image ? Storage::url($event->organizer->image) : asset('assets/img/authors/author-1.svg') }}">
												<div class="people-joined">
													<h5>{{ $event->organizer->name }}</h5><span>Organizer</span>
												</div>
											</div>
										@endif
									</div>
									<div class="event-card-middle text-start">
										<h2><a href="{{ $event->camping ? route('campingDetails', $event->camping) : route('camping') }}">{{ $event->title }}</a></h2>
										<div class="address">
											@if ($event->location)
												<div class="location">
													<i class="fa-regular fa-location-dot"></i> <span>{{ $event->location }}</span>
												</div>
											@endif
											@if ($event->schedule)
												<div class="time">
													<i class="fa-regular fa-clock"></i> <span>{{ $event->schedule->format('H:i') }} WIB</span>
												</div>
											@endif
										</div>
										<div class="event-btn">
											<a class="e-primary-btn has-icon" href="{{ $event->camping ? route('campingDetails', $event->camping) : route('camping') }}">Join Event
												<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
										</div>
									</div>
								</div>
								<div class="thumb">
									<a href="{{ $event->camping ? route('campingDetails', $event->camping) : route('camping') }}">
										<img alt="{{ $event->title }}"
											src="{{ $event->camping?->image ? Storage::url($event->camping->image) : asset('assets/img/thumbs/thumb-event-1.svg') }}">
									</a>
									@if ($event->camping)
										<div class="category">
											<a href="{{ route('campingDetails', $event->camping) }}">{{ $event->camping->title }}</a>
										</div>
									@endif
									<div class="shape-3"><img alt="shape-3" src="{{ asset('assets/img/shapes/shape-3.webp') }}"></div>
								</div>
							</div>
						</div>
					@empty
						<div class="col-12">
							<p class="text-center">No upcoming events at the moment. Please check back soon.</p>
						</div>
					@endforelse
			</div>
		</div>
	</section>
	<!-- our-events-section end -->

	<!-- latest-blog-section start -->
	<section class="latest-blog-section p-t-100 p-t-xs-80 p-b-60 p-b-xs-20 p-b-md-20 p-b-lg-20 p-b-xl-20" style="background-image: url(assets/img/bg/latest-news-bg.svg)">
		<div class="container">
			<div class="row justify-content-between m-b-150 m-b-xl-120 m-b-lg-100 m-b-md-80 m-b-xs-80">
				<div class="col-xl-3 col-md-6 col-12">
					<div class="latest-blog-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="common-subtitle">
							<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>News & Blog</span>
						</div>
						<div class="common-title text-start">
							<h2>Check Our Latest Blog Post</h2>
						</div>
						<div class="text">
							<p>Insights, research, and updates from Coasterra.</p>
						</div>
						<div class="blog-btn">
							<a class="e-primary-btn has-icon" href=" ">Explore All Posts
								<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-md-6 col-12">
					<div class="blog-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								@forelse ($blogs as $post)
									<div class="swiper-slide">
										<div class="blog-card">
											<div class="thumb">
												<a href="{{ route('blogDetails', $post) }}">
													<img alt="{{ $post->title }}"
														src="{{ $post->image ? Storage::url($post->image) : asset('assets/img/thumbs/thumb-news-1.svg') }}">
												</a>
												@if ($post->category)
													<div class="category">
														<a href="{{ route('blogGrid', ['category' => $post->category_id]) }}">{{ $post->category->title }}</a>
													</div>
												@endif
												<div class="event-date">
													<h2>{{ $post->created_at->format('d') }}</h2>
													<h5>{{ $post->created_at->format('M') }}</h5><span>{{ $post->created_at->format('Y') }}</span>
												</div>
											</div>
											<div class="content">
												<div class="content-top p-0 m-b-20">
													<div class="title">
														<h3><a href="{{ route('blogDetails', $post) }}">{{ $post->title }}</a></h3>
													</div>
													<div class="text">
														<p>{{ Str::limit(strip_tags($post->description), 110) }}</p>
													</div>
												</div>
												<div class="content-bottom">
													<a class="e-primary-btn has-icon has-small" href="{{ route('blogDetails', $post) }}">Read More
														<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span></a>
													<div class="social-share">
														<button class="total-shared"><i class="fa-solid fa-share-nodes"></i></button>
														<div class="social-links">
															<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
															<a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a>
															<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
															<a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								@empty
									<div class="swiper-slide">
										<div class="blog-card">
											<div class="content">
												<div class="content-top p-0 m-b-20">
													<div class="title"><h3>No blog posts yet</h3></div>
													<div class="text"><p>Posts published from the admin panel will appear here.</p></div>
												</div>
											</div>
										</div>
									</div>
								@endforelse
							</div>
						</div>
						<div class="blog-pagination"></div>
					</div>
				</div>
			</div>
			<div class="latest-blog-row-bottom" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="row-bottom-thumb">
					<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-news.svg') }}"></div>
				</div>
				<div class="row row-gap-4 align-items-center">
					<div class="col-md-6 col-12">
						<div class="common-title text-start">
							<h2>{{ setting('newsletter_title', 'Get interesting news') }}
								<span><i class="fa-solid fa-arrow-right-long"></i></span></h2>
						</div>
						<p>{{ setting('newsletter_text', 'Sign up to get the latest updates!') }}</p>
					</div>
					<div class="col-md-6 col-12">
						@if (session('newsletter_success'))
							<div class="alert alert-success">{{ session('newsletter_success') }}</div>
						@endif
						@if ($errors->newsletter->any())
							<div class="alert alert-danger">
								<ul class="mb-0 ps-3">
									@foreach ($errors->newsletter->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						<form class="form-1" method="POST" action="{{ route('subscribe.store') }}">
							@csrf
							<div class="input-wrap-2 m-b-20">
								<input placeholder="example@email.com" type="email" name="email" value="{{ old('email') }}" required>
							</div>
							<button class="e-primary-btn has-icon" type="submit">Subscribe Now
								<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-38.webp') }}"></div>
	</section>
	<!-- latest-blog-section end -->
</main>

<!-- footer-section start -->
<footer class="footer-section footer-section-2 p-t-125 p-t-md-100 p-t-xs-80 p-b-50">
	<div class="container">
		<div class="row justify-content-between row-gap-md-5 row-gap-4 p-b-80">
			<div class="col-xl-4 col-lg-8 col-md-7">
				<div class="footer-widget">
					<div class="about-widget">
						<div class="footer-logo">
							<a href="{{ route('index') }}">
								<img src="{{ asset('assets/img/template/logo-vector.svg') }}" alt="logo"/>
							</a>
						</div>
						<div class="text">
							<p>								
								Nature-Based Climate Solutions for Coastal Resilience & Empowered Communities.
								<!-- Together for Resilient Coasts, Stronger Communities. -->
							</p>
						</div>
						<div class="info">
							<p><b>We Are Available !!</b></p>
							<p>Mon-Sat: <span>10:00am to 07:30pm</span></p>
						</div>
						<div class="social-links">
							<a href="https://facebook.com">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a href="https://twitter.com">
								<i class="fab fa-x-twitter"></i>
							</a>
							<a href="https://www.instagram.com/coast.terra">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="https://linkedin.com">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-4 col-md-5">
				<div class="footer-widget">
					<h3 class="w-title">
						<span><img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon"/></span>
						Quick Links
					</h3>
					<ul>
						<li><a href="{{ route('about') }}">About Us</a></li>
						<li><a href="{{ route('services') }}">Program</a></li>
						<li><a href="{{ route('volunteer') }}">Our Team</a></li>
						<li><a href="{{ route('blogStandard') }}">Blog</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-2 col-lg-4 col-md-5">
				<div class="footer-widget">
					<h3 class="w-title">
						<span><img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon"/></span>
						Our Services
					</h3>
					<ul>
						<li><a href=" ">Coastal Assessment</a></li>
						<li><a href=" ">CSR Project Management</a></li>
						<li><a href=" ">Climate Education</a></li>
						<li><a href=" ">ESG Reporting</a></li>
						<li><a href=" ">Carbon Readiness</a></li>
						<li><a href=" ">Blue Carbon Enablement</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="footer-widget">
					<h3 class="w-title">
						<span><img src="{{ asset('assets/img/icons/icon-1.svg') }}" alt="icon"/></span>
						Get in Touch
					</h3>
					<div class="get-in-touch">
						<a href="#" class="footer-address">
							<div class="icon">
								<i class="fa-solid fa-location-dot"></i>
							</div>
							<div class="text">
								<h6>Address</h6>
								<p>Semarang, Central Java, Indonesia</p>
							</div>
						</a>
						<a href="mailto:support@example.com" class="email">
							<div class="icon">
								<i class="fa-solid fa-paper-plane"></i>
							</div>
							<div class="text">
								<h6>Email</h6>
								<p>Support@example.com</p>
							</div>
						</a>
						<a href="tel:+70264566579" class="phone">
							<div class="icon">
								<i class="fa-solid fa-phone-arrow-up-right"></i>
							</div>
							<div class="text">
								<h6>Phone</h6>
								<p>+62 XXX XXX XXX</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="row">
			<div class="col-xl-12">
				<div class="container">
					<div class="footer-bottom-layout">
						<div class="footer-copyright">
							© {{ now()->year }} Coasterra. All Rights Reserved.
						</div>
						<div class="footer-bottom-menu">
							<ul>
								<li><a href="{{ route('contact') }}">Terms & Condition</a></li>
								<li><a href="{{ route('contact') }}">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- footer-section end -->

@include('elements.script')

</body>

</html>