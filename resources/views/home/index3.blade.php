<!DOCTYPE html>
<html lang="en">

    @include('elements.head')

<body>

<!-- preloader start-->
@include('elements.preloader')
<!-- preloader end  -->

<!-- header-section start -->
<header class="header-section-3">
	<div class="header-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="header-bottom-layout">
						<div class="header-left">
							<div class="logo-wrap">
								<a href="{{ route('index') }}">
									<img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo"/>
								</a>
							</div>
							<nav class="main-menu d-none d-xl-block">
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
											<li>
												<a href="{{ route(('servicesDetails')) }}">Services Details</a>
											</li>
											<li><a href="{{ route('project') }}">Projects</a></li>
											<li>
												<a href="{{ route(('projectDetails')) }}">Project Details</a>
											</li>
											<li><a href="{{ route('camping') }}">Camping</a></li>
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
											<li><a href="{{ route('volunteer') }}">Volunteers</a></li>
											<li>
												<a href="{{ route(('volunteerDetails')) }}">Volunteer Details</a>
											</li>
										</ul>
									</li>
									<li class="has-dropdown">
										<a href="#">Blog</a>
										<ul class="sub-menu">
											<li><a href="{{ route(('blogGrid')) }}">Blog Grid</a></li>
											<li>
												<a href="{{ route(('blogStandard')) }}">Blog Standard</a>
											</li>
											<li><a href="{{ route(('blogDetails')) }}">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="{{ route('contact') }}">Contact Us</a></li>
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
								<a href="{{ route('donations') }}" class="e-primary-btn has-icon">
									Get Started
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
									</span>
								</a>
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
<!-- off-canvas-menubar end -->

<main>
	<!-- hero-section start -->
	<section class="hero-slider-active-3">
		<div class="swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="hero-slide-3" style="background-image: url(assets/img/bg/hero-bg-3.webp)">
						<div class="container">
							<div class="hero-content-3">
								<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.2s">
									<img alt="icon" src="{{ asset('assets/img/icons/icon-7.svg') }}"> <span>Best Energy Solution</span>
								</div>
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Proven Renewable Energy <img alt="icon" src="{{ asset('assets/img/icons/icon-8.svg') }}"> Solution</h1>
								</div>
								<div class="text" data-animation="animate__fadeInUp" data-delay="0.4s">
									<p>Completely synergize resource taxing relationships via premier.</p>
								</div>
								<div class="services-3" data-animation="animate__fadeInUp" data-delay="0.5s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Specialized Company</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Specialized Company</p>
									</div>
								</div>
								<div data-animation="animate__fadeInUp" data-delay="0.6s">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('about') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="banner-thumb"><img alt="thumb" data-animation="animate__fadeInUp" data-delay="0.2s" src="{{ asset('assets/img/thumbs/thumb-46.webp') }}"></div>
						<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-20.webp') }}"></div>
						<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-21.webp') }}"></div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hero-slide-3" style="background-image: url(assets/img/bg/hero-bg-3.webp)">
						<div class="container">
							<div class="hero-content-3">
								<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.2s">
									<img alt="icon" src="{{ asset('assets/img/icons/icon-7.svg') }}"> <span>Top Energy Provider</span>
								</div>
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Trusted Sustainab Power <img alt="icon" src="{{ asset('assets/img/icons/icon-8.svg') }}"> Option</h1>
								</div>
								<div class="text" data-animation="animate__fadeInUp" data-delay="0.4s">
									<p>Efficiently optimize eco-focused partnerships through excellence</p>
								</div>
								<div class="services-3" data-animation="animate__fadeInUp" data-delay="0.5s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Expert Provider</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Expert Provider</p>
									</div>
								</div>
								<div data-animation="animate__fadeInUp" data-delay="0.6s">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('about') }}">Explore Options <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="banner-thumb"><img alt="thumb" data-animation="animate__fadeInUp" data-delay="0.2s" src="{{ asset('assets/img/thumbs/thumb-154.webp') }}"></div>
						<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-20.webp') }}"></div>
						<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-21.webp') }}"></div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hero-slide-3" style="background-image: url(assets/img/bg/hero-bg-3.webp)">
						<div class="container">
							<div class="hero-content-3">
								<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.2s">
									<img alt="icon" src="{{ asset('assets/img/icons/icon-7.svg') }}"> <span>Best Energy Solution</span>
								</div>
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Proven Renewable Energy <img alt="icon" src="{{ asset('assets/img/icons/icon-8.svg') }}"> Solution</h1>
								</div>
								<div class="text" data-animation="animate__fadeInUp" data-delay="0.4s">
									<p>Completely synergize resource taxing relationships via premier.</p>
								</div>
								<div class="services-3" data-animation="animate__fadeInUp" data-delay="0.5s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Specialized Company</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Specialized Company</p>
									</div>
								</div>
								<div data-animation="animate__fadeInUp" data-delay="0.6s">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('about') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="banner-thumb"><img alt="thumb" data-animation="animate__fadeInUp" data-delay="0.2s" src="{{ asset('assets/img/thumbs/thumb-46.webp') }}"></div>
						<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-20.webp') }}"></div>
						<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-21.webp') }}"></div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hero-slide-3" style="background-image: url(assets/img/bg/hero-bg-3.webp)">
						<div class="container">
							<div class="hero-content-3">
								<div class="subtitle" data-animation="animate__fadeInUp" data-delay="0.2s">
									<img alt="icon" src="{{ asset('assets/img/icons/icon-7.svg') }}"> <span>Top Energy Provider</span>
								</div>
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Trusted Sustainab Power <img alt="icon" src="{{ asset('assets/img/icons/icon-8.svg') }}"> Option</h1>
								</div>
								<div class="text" data-animation="animate__fadeInUp" data-delay="0.4s">
									<p>Efficiently optimize eco-focused partnerships through excellence</p>
								</div>
								<div class="services-3" data-animation="animate__fadeInUp" data-delay="0.5s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Expert Provider</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Expert Provider</p>
									</div>
								</div>
								<div data-animation="animate__fadeInUp" data-delay="0.6s">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('about') }}">Explore Options <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="banner-thumb"><img alt="thumb" data-animation="animate__fadeInUp" data-delay="0.2s" src="{{ asset('assets/img/thumbs/thumb-154.webp') }}"></div>
						<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-20.webp') }}"></div>
						<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-21.webp') }}"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-slider-pagination-3"></div>
		<div class="hero-slider-navigation">
			<div class="hero-slider-button-prev-3">
				<i class="fa-regular fa-arrow-left"></i>
			</div>
			<div class="hero-slider-button-next-3">
				<i class="fa-regular fa-arrow-right"></i>
			</div>
		</div>
		<div class="hero-slider-social">
			<div class="social-links">
				<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<div class="text">
				Join Social:
			</div>
		</div>
	</section>
	<!-- hero-section end -->

	<!-- about-us-section start -->
	<section class="about-us-section m-t-120 m-t-md-100 m-t-xs-80">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6">
					<div class="thumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="shape-wrapped-thumb-2">
							<div class="thumb-wrapper"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-41.webp') }}"> <img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-42.webp') }}"></div>
							<div class="positioned-thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-43.webp') }}"></div>
							<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-22.webp') }}"></div>
							<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-23.webp') }}"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle">
							<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>Know About Econest</span>
						</div>
						<div class="common-title text-start">
							<h2>Protecting Nature, Proper Waste Management!</h2>
						</div>
						<div class="c-tabs-wrapper">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation"><button aria-controls="c-tab-1-pane" aria-selected="true" class="nav-link active" data-bs-target="#c-tab-1-pane" data-bs-toggle="tab" id="c-tab-1" role="tab" type="button">Our History</button></li>
								<li class="nav-item" role="presentation"><button aria-controls="c-tab-2-pane" aria-selected="false" class="nav-link" data-bs-target="#c-tab-2-pane" data-bs-toggle="tab" id="c-tab-2" role="tab" type="button">Our Mission</button></li>
								<li class="nav-item" role="presentation"><button aria-controls="c-tab-3-pane" aria-selected="false" class="nav-link" data-bs-target="#c-tab-3-pane" data-bs-toggle="tab" id="c-tab-3" role="tab" type="button">Our Vision</button></li>
							</ul>
							<div class="tab-content" id="myTabContent">
								<div aria-labelledby="c-tab-1" class="tab-pane fade show active" id="c-tab-1-pane" role="tabpanel" tabindex="0">
									<div class="text">
										<p>The implant fixture is first placed, so that it ilikely to then a dental prosthetic is added then dental prosthetic.</p>
									</div>
									<div class="benefits">
										<ul>
											<li>Nature ecologically, acceptable, organisms environment</li>
											<li>Ecology is the study of the relationship between living</li>
											<li>Focus on your important tasks and orders</li>
										</ul>
									</div>
								</div>
								<div aria-labelledby="c-tab-2" class="tab-pane fade" id="c-tab-2-pane" role="tabpanel" tabindex="0">
									<div class="text">
										<p>The implant fixture is first placed, so that it ilikely to then a dental prosthetic is added then dental prosthetic.</p>
									</div>
									<div class="benefits">
										<ul>
											<li>Nature ecologically, acceptable, organisms environment</li>
											<li>Ecology is the study of the relationship between living</li>
											<li>Focus on your important tasks and orders</li>
										</ul>
									</div>
								</div>
								<div aria-labelledby="c-tab-3" class="tab-pane fade" id="c-tab-3-pane" role="tabpanel" tabindex="0">
									<div class="text">
										<p>The implant fixture is first placed, so that it ilikely to then a dental prosthetic is added then dental prosthetic.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="annual-donation-wrap">
							<div class="blog-btn">
								<a class="e-primary-btn has-icon" href="{{ route('about') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
							<div class="blog-btn">
								<a class="e-primary-btn has-icon video-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Watch Video <span class="icon-wrap"><span class="icon"><i class="fa-solid fa-play"></i> <i class="fa-solid fa-play"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-us-section end -->

	<!-- company-achievements-section start -->
	<section class="company-achievements-section">
		<div class="container">
			<div class="company-achievements m-t-60" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="achievement">
					<i class="fa-light fa-chart-mixed"></i>
					<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%</h2>
					<p>Company Success</p>
				</div>
				<div class="achievement">
					<i class="fa-light fa-lightbulb-exclamation-on"></i>
					<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
					<p>Company Strategies</p>
				</div>
				<div class="achievement">
					<i class="fa-light fa-thumbs-up"></i>
					<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36">0</span>k</h2>
					<p>Complete Projects</p>
				</div>
				<div class="achievement">
					<i class="fa-light fa-users-medical"></i>
					<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
					<p>Experienced Members</p>
				</div>
			</div>
		</div>
	</section>
	<!-- company-achievements-section end -->

	<!-- what-we-do-section start -->
	<section class="what-we-do-section-2" style="background-image: url(assets/img/bg/what-we-do-bg-2.webp)">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="section-top-3">
						<div class="left">
							<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
								<img alt="icon-1" src="{{ asset('assets/img/icons/icon-1.svg') }}"> <span>What We Do</span>
							</div>
							<div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
								<h2>It’s All Possible, We Can Do it Together</h2>
							</div>
						</div>
						<div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
							<p>“Advanced cameras combined with a large display fast performance, and highly calibrated.”</p><a class="service-btn e-primary-btn has-icon" href="{{ route('contact') }}">Contact With Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="whatwedo-slider-active" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="we-do-card">
										<div class="card-content">
											<i class="fa-solid fa-sun"><span>1</span></i>
											<h5>Solar Recycling</h5>
										</div>
										<div class="card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-58.webp') }}"> <a class="circled-btn" href="{{ route('project') }}">
											<p>Read More</p>
											<div class="icon">
												<i class="fa-regular fa-arrow-right"></i>
											</div></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="we-do-card">
										<div class="card-content">
											<i class="fa-solid fa-sun"><span>2</span></i>
											<h5>Renewable Power</h5>
										</div>
										<div class="card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-59.webp') }}"> <a class="circled-btn" href="{{ route('project') }}">
											<p>Read More</p>
											<div class="icon">
												<i class="fa-regular fa-arrow-right"></i>
											</div></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="we-do-card">
										<div class="card-content">
											<i class="fa-solid fa-sun"><span>3</span></i>
											<h5>Solar Collection</h5>
										</div>
										<div class="card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-60.webp') }}"> <a class="circled-btn" href="{{ route('project') }}">
											<p>Read More</p>
											<div class="icon">
												<i class="fa-regular fa-arrow-right"></i>
											</div></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="we-do-card">
										<div class="card-content">
											<i class="fa-solid fa-sun"><span>4</span></i>
											<h5>Forest Protection</h5>
										</div>
										<div class="card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-61.webp') }}"> <a class="circled-btn" href="{{ route('project') }}">
											<p>Read More</p>
											<div class="icon">
												<i class="fa-regular fa-arrow-right"></i>
											</div></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="we-do-card">
										<div class="card-content">
											<i class="fa-solid fa-sun"><span>2</span></i>
											<h5>Renewable Power</h5>
										</div>
										<div class="card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-59.webp') }}"> <a class="circled-btn" href="{{ route('project') }}">
											<p>Read More</p>
											<div class="icon">
												<i class="fa-regular fa-arrow-right"></i>
											</div></a>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="we-do-card">
										<div class="card-content">
											<i class="fa-solid fa-sun"><span>3</span></i>
											<h5>Solar Collection</h5>
										</div>
										<div class="card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-60.webp') }}"> <a class="circled-btn" href="{{ route('project') }}">
											<p>Read More</p>
											<div class="icon">
												<i class="fa-regular fa-arrow-right"></i>
											</div></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="whatwedo-slider-bottom">
							<div class="whatwedo-navigation">
								<div class="whatwedo-button-prev">
									<i class="fa-regular fa-arrow-left"></i>
								</div>
								<div class="whatwedo-button-next">
									<i class="fa-regular fa-arrow-right"></i>
								</div>
							</div>
							<div class="whatwedo-pagination-wrap">
								<div class="whatwedo-pagination"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-29.webp') }}"></div>
	</section>
	<!-- what-we-do-section end -->

	<!-- why-us-section start -->
	<section class="why-us-section-3 p-t-100 p-b-120 p-b-md-100 p-t-xs-80 p-b-xs-80" style="background-image: url(assets/img/bg/why-us-bg-2.webp)">
		<div class="container">
			<div class="row align-items-center p-b-80">
				<div class="col-xl-6">
					<div class="thumb-wrapper" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="thumb-1">
							<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-44.webp') }}">
							<div class="experience-shape">
								<h3><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="29">0</span>+</h3>
								<p>Years of experience</p>
							</div>
						</div>
						<div class="thumb-2"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-45.webp') }}"></div>
						<div class="award-winner-shape">
							<div class="top">
								<img alt="icon" src="{{ asset('assets/img/icons/icon-10.svg') }}">
								<p>2026-We are best award winner</p>
							</div>
							<div class="authors"><img alt="authors" src="{{ asset('assets/img/authors/author-2.webp') }}"></div>
						</div>
						<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-24.webp') }}"></div>
						<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-25.webp') }}"></div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content why-us-content-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle">
							<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>Why Choose Us</span>
						</div>
						<div class="common-title text-start">
							<h2>Some Reasons to Choose Econest Organization</h2>
						</div>
						<div class="text">
							<p>The implant fixture is first placed, so that it ilikely to then a dental prosthetic is added then dental prosthetic occaecat laborum.</p>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Specialized Company</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Licensed & Insured</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Dependable Services</p>
								</div>
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Day Scheduling</p>
								</div>
							</div>
						</div>
						<div class="annual-donation-wrap">
							<div class="blog-btn">
								<a class="e-primary-btn has-icon" href="{{ route('about') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- why-us-section end -->

	<!-- services-section start -->
	<section class="services-section-2 p-t-100 p-t-xs-80">
		<div class="container">
			<div class="services-content">
				<div class="text-center m-b-50 m-b-xs-40">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>Work Process</span>
					</div>
					<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>How To Work With Us</h2>
					</div>
				</div>
				<div class="row row-gap-4 m-b-135 m-b-lg-120 m-b-md-100 m-b-xs-80" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<div class="col-xl-4 col-md-6">
						<div class="service-card-2">
							<div class="service-top">
								<h4>Think Identifying</h4>
								<h4 class="circled-heading">01</h4>
							</div>
							<div class="service-content">
								<p>Many desktop publishing packages and web page editors now use.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="service-card-2">
							<div class="service-top">
								<h4>Work Planning</h4>
								<h4 class="circled-heading">02</h4>
							</div>
							<div class="service-content">
								<p>Readable english specimen book. It has survived not only five centuries.</p>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="service-card-2">
							<div class="service-top">
								<h4>Product Installation</h4>
								<h4 class="circled-heading">03</h4>
							</div>
							<div class="service-content">
								<p>Lorem Ipsum is not simply random text has roots in a piece of classical.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="shape-2"></div>
			</div>
		</div>
		<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-26.webp') }}"></div>
	</section>
	<!-- services-section end -->

	<!-- latest-work-section start -->
	<section class="latest-work-section">
		<div class="container">
			<div class="text-center m-b-60 m-b-xs-50">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>Latest Work</span>
				</div>
				<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Recent Completed Project</h2>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-12">
					<div class="work-card">
						<div class="work-card-thumb"><svg class="clippy">
							<defs>
								<clippath id="w-mask-image">
									<path d="M94.208 5.66961L19.4714 50.3601C7.39412 57.582 0 70.6187 0 84.6905V542.872H499.787V138.759C499.787 124.827 492.537 111.898 480.65 104.631L319.1 5.87191C312.818 2.0319 305.599 0 298.236 0H114.737C107.507 0 100.413 1.95932 94.208 5.66961Z" fill="#FFE175"></path>
								</clippath>
								<clippath id="w-mask-shape">
									<path d="M94.208 5.66961L19.4714 50.3601C7.39412 57.582 0 70.6187 0 84.6905V542.872H499.787V138.759C499.787 124.827 492.537 111.898 480.65 104.631L319.1 5.87191C312.818 2.0319 305.599 0 298.236 0H114.737C107.507 0 100.413 1.95932 94.208 5.66961Z" fill="#FFE175"></path>
								</clippath>
							</defs></svg> <img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-54.1.webp') }}"></div>
						<div class="work-card-content">
							<p>Solar Installation</p>
							<h3>The forest is our life, it is our job to keep the forest clean</h3>
							<div class="annual-donation-wrap">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('project') }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="card-number">
							<h1>01</h1>
						</div>
					</div>
					<div class="work-card">
						<div class="work-card-thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-54.2.webp') }}"></div>
						<div class="work-card-content">
							<p>Tree Plantation</p>
							<h3>Planting trees today helps grow a greener, healthier tomorrow.</h3>
							<div class="annual-donation-wrap">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('project') }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="card-number">
							<h1>02</h1>
						</div>
					</div>
					<div class="work-card">
						<div class="work-card-thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-54.3.webp') }}"></div>
						<div class="work-card-content">
							<p>Waste Management</p>
							<h3>Smart waste handling keeps our environment clean and safe.</h3>
							<div class="annual-donation-wrap">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('project') }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="card-number">
							<h1>03</h1>
						</div>
					</div>
					<div class="work-card">
						<div class="work-card-thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-54.4.webp') }}"></div>
						<div class="work-card-content">
							<p>Cleaning & Recycling</p>
							<h3>Recycling and cleaning reduce pollution and protect the planet.</h3>
							<div class="annual-donation-wrap">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('project') }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="card-number">
							<h1>04</h1>
						</div>
					</div>
					<div class="work-card">
						<div class="work-card-thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-54.5.webp') }}"></div>
						<div class="work-card-content">
							<p>Renewable Energy</p>
							<h3>Clean energy powers the future without harming the planet.</h3>
							<div class="annual-donation-wrap">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon is-hover-white" href="{{ route('project') }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="card-number">
							<h1>05</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- latest-work-section end -->

	<!-- testimonial-section start -->
	<section class="testimonial-section-3 p-t-90 p-t-md-70 p-t-xs-50 p-b-20" style="background-image: url(assets/img/bg/testimonial-bg-2.webp)">
		<div class="container">
			<div class="section-top-10">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>Testimonials</span>
				</div>
				<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Read Our Success Story to Find Happiness <span><img alt="icon" src="{{ asset('assets/img/icons/icon-11.svg') }}"></span></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="testimonial-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="testimonial-card-3">
										<div class="testimonial-card-content">
											<h5>“Solar Recycling”</h5>
											<p>Energy consulting involves providing of advice and guidance on energy-related for matters. Understand the advantages professionals!!</p>
										</div>
										<div class="testimonial-card-thumb">
											<svg class="clippy">
												<defs>
													<clippath id="c-mask-image">
														<path d="M79.1867 4.12466L22.3093 32.1718C8.64935 38.9077 0 52.8166 0 68.0471V338C0 360.091 17.9086 378 40 378H382C404.091 378 422 360.091 422 338V105.63C422 90.527 413.493 76.7114 400.006 69.9124L269.819 4.282C264.234 1.46659 258.067 0 251.812 0H96.8774C90.7422 0 84.6893 1.41127 79.1867 4.12466Z" fill="#85BF18"></path>
													</clippath>
													<clippath id="c-mask-shape">
														<path d="M70.083 4.89489L20.8263 31.7979C7.98681 38.8106 0 52.2733 0 66.903V338C0 360.091 17.9086 378 40 378H341C363.091 378 381 360.091 381 338V104.478C381 89.9824 373.157 76.6209 360.501 69.5539L245.025 5.07554C239.065 1.74729 232.351 0 225.524 0H89.2567C82.5564 0 75.9634 1.68313 70.083 4.89489Z" fill="#FFE175" opacity="0.08"></path>
													</clippath>
												</defs></svg> <img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-55.webp') }}">
											<div class="circled-quote">
												<i class="fa-solid fa-quote-right"></i>
											</div>
											<div class="author-info">
												<h5>Penelope Miller (Arjun)</h5>
												<p>Sr. Volunteer</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-card-3">
										<div class="testimonial-card-content">
											<h5>“Best Solution”</h5>
											<p>Energy consulting involves providing of advice and guidance on energy-related for matters. Understand the advantages professionals!!</p>
										</div>
										<div class="testimonial-card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-56.webp') }}">
											<div class="circled-quote">
												<i class="fa-solid fa-quote-right"></i>
											</div>
											<div class="author-info">
												<h5>Penelope Miller (Arjun)</h5>
												<p>Sr. Volunteer</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-card-3">
										<div class="testimonial-card-content">
											<h5>“Power Renewable”</h5>
											<p>Energy consulting involves providing of advice and guidance on energy-related for matters. Understand the advantages professionals!!</p>
										</div>
										<div class="testimonial-card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-57.webp') }}">
											<div class="circled-quote">
												<i class="fa-solid fa-quote-right"></i>
											</div>
											<div class="author-info">
												<h5>Penelope Miller (Arjun)</h5>
												<p>Sr. Volunteer</p>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-card-3">
										<div class="testimonial-card-content">
											<h5>“Best Solution”</h5>
											<p>Energy consulting involves providing of advice and guidance on energy-related for matters. Understand the advantages professionals!!</p>
										</div>
										<div class="testimonial-card-thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-56.webp') }}">
											<div class="circled-quote">
												<i class="fa-solid fa-quote-right"></i>
											</div>
											<div class="author-info">
												<h5>Penelope Miller (Arjun)</h5>
												<p>Sr. Volunteer</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="testimonial-pagination-wrap">
							<div class="testimonial-pagination-2"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- major-partners start -->
			<div class="major-partners style-3 p-t-100 p-t-xs-80">
				<div class="partners-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="line-right"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
					<h3>Major Partners</h3>
					<div class="line"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
				</div>
				<div class="row p-t-60 p-b-60" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="col-xl-12">
						<div class="partner-marquee">
							<div class="partner-marquee-layout">
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-2.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-13.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-3.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-12.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-4.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-11.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-5.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-9.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-6.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-10.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-7.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-14.webp') }}"></div>
								</div>
							</div>
							<div class="partner-marquee-layout">
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-2.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-13.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-3.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-12.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-4.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-11.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-5.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-9.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-6.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-10.webp') }}"></div>
								</div>
								<div class="partner-2">
									<div class="logo-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-7.webp') }}"></div>
									<div class="logo-2"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-14.webp') }}"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="partner-btn text-center" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<a class="e-primary-btn has-icon" href="{{ route('contact') }}">Become a Partner <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div><!-- major-partners end -->
		</div>
	</section>
	<!-- testimonial-section end -->

	<!-- volunteer-section start -->
	<section class="volunteer-section-3 p-b-120 p-b-md-100 p-b-xs-80">
		<div class="container">
			<div class="row row-gap-5 align-items-center">
				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="section-top-11">
						<div class="common-subtitle">
							<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>Econest Workers</span>
						</div>
						<div class="common-title text-start">
							<h2>Our Professionals Engineers</h2>
						</div>
						<div>
							<a class="e-primary-btn has-icon" href="{{ route('volunteer') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="row row-gap-4 m-b-30">
						<div class="col-md-6">
							<div class="volunteer-card-3">
								<a href="{{ route(('volunteerDetails')) }}">
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-47.webp') }}"></div>
									<div class="author-info">
										<h5>Penelope Miller</h5>
										<p>Team Manager</p>
									</div></a>
								<div class="socials">
									<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="volunteer-card-3">
								<a href="{{ route(('volunteerDetails')) }}">
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-48.webp') }}"></div>
									<div class="author-info">
										<h5>Denial Pasha</h5>
										<p>Team Manager</p>
									</div></a>
								<div class="socials">
									<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row row-gap-4">
						<div class="col-md-6">
							<div class="volunteer-card-3">
								<a href="{{ route(('volunteerDetails')) }}">
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-49.webp') }}"></div>
									<div class="author-info">
										<h5>Joshua Sendu</h5>
										<p>CEO-Founder</p>
									</div></a>
								<div class="socials">
									<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="volunteer-card-3">
								<a href="{{ route(('volunteerDetails')) }}">
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-50.webp') }}"></div>
									<div class="author-info">
										<h5>John Maxwell</h5>
										<p>CO-Founder</p>
									</div></a>
								<div class="socials">
									<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-28.webp') }}"></div>
	</section>
	<!-- volunteer-section end -->

	<!-- contact-us-2 start -->
	<section class="contact-us-2" style="background-image: url(assets/img/bg/contact-us-bg-2.webp)">
		<div class="container">
			<div class="contact-form-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="form-content">
					<h3>Get In Touch <span>With Us!</span></h3>
					<p>Fill out the form and Feel free to say !!</p>
					<form>
						<div class="mb-3">
							<input class="form-control" id="exampleFormControlInput1" placeholder="Ashikul Islam Sihan" type="text">
						</div>
						<div class="mb-3">
							<input class="form-control" id="exampleFormControlInput2" placeholder="example@gmail.com" type="email">
						</div>
						<div class="mb-3">
							<input class="form-control" id="exampleFormControlInput3" placeholder="+1 xxx xxx xxxx" type="text">
						</div>
						<div class="mb-3">
							<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Say Something..." rows="4"></textarea>
						</div><button class="e-primary-btn has-icon" type="submit">Submit Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></button>
					</form>
				</div>
			</div>
		</div>
		<div class="icon"><img alt="icon" src="{{ asset('assets/img/icons/icon-8.svg') }}"></div>
	</section>
	<!-- contact-us-2 end -->

	<!-- latest-blog-section-3 start -->
	<section class="latest-blog-section-3 p-t-120 p-b-120 p-t-md-100 p-b-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon" src="{{ asset('assets/img/icons/icon-9.svg') }}"> <span>News & Blog</span>
				</div>
				<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Our Daily Update</h2>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<div class="col-xl-4 col-md-6">
						<div class="blog-card-3">
							<div class="thumb">
								<a href="{{ route(('blogGrid')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-51.webp') }}"></a>
								<div class="date">
									<h4>24</h4>
									<p>Jan</p>
								</div>
							</div>
							<div class="content">
								<div class="content-top p-0 m-b-20">
									<div class="author">
										<div class="admin">
											<i class="fa-light fa-circle-user"></i> <span>Admin</span>
										</div>
										<div class="solar">
											<i class="fa-light fa-bookmark"></i> <span>Solar</span>
										</div>
									</div>
									<div class="title">
										<h3><a href="{{ route(('blogGrid')) }}">From Trash to Treasure: Inspiring Recycling Stories</a></h3>
									</div>
								</div>
								<div class="content-bottom">
									<a class="e-primary-btn has-icon has-small read-more-btn is-hover-white" href="{{ route(('blogGrid')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card-3">
							<div class="thumb">
								<a href="{{ route(('blogGrid')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-52.webp') }}"></a>
								<div class="date">
									<h4>09</h4>
									<p>Feb</p>
								</div>
							</div>
							<div class="content">
								<div class="content-top p-0 m-b-20">
									<div class="author">
										<div class="admin">
											<i class="fa-light fa-circle-user"></i> <span>Admin</span>
										</div>
										<div class="solar">
											<i class="fa-light fa-bookmark"></i> <span>Solar</span>
										</div>
									</div>
									<div class="title">
										<h3><a href="{{ route(('blogGrid')) }}">Water Conservation: Small Changes, Big Impact</a></h3>
									</div>
								</div>
								<div class="content-bottom">
									<a class="e-primary-btn has-icon has-small read-more-btn is-hover-white" href="{{ route(('blogGrid')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-6">
						<div class="blog-card-3">
							<div class="thumb">
								<a href="{{ route(('blogGrid')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-53.webp') }}"></a>
								<div class="date">
									<h4>17</h4>
									<p>Mar</p>
								</div>
							</div>
							<div class="content">
								<div class="content-top p-0 m-b-20">
									<div class="author">
										<div class="admin">
											<i class="fa-light fa-circle-user"></i> <span>Admin</span>
										</div>
										<div class="solar">
											<i class="fa-light fa-bookmark"></i> <span>Solar</span>
										</div>
									</div>
									<div class="title">
										<h3><a href="{{ route(('blogGrid')) }}">The Power of One: How Individual Actions Save the Planet</a></h3>
									</div>
								</div>
								<div class="content-bottom">
									<a class="e-primary-btn has-icon has-small read-more-btn is-hover-white" href="{{ route(('blogGrid')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- latest-blog-section-3 end -->

	<!-- news-letter start -->
	<section class="news-letter" style="background-image: url(assets/img/bg/newsletter-bg.webp)">
		<div class="news-letter-content">
			<div class="section-top-12">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Subscribe Newsletter</span>
				</div>
				<div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Get Interesting News <span><img alt="icon" src="{{ asset('assets/img/icons/icon-13.svg') }}"></span></h2>
				</div>
			</div>
			<form class="form-2">
				<div class="mb-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
					<input class="form-control" id="exampleFormControlInput4" placeholder="example@gmail.com" type="email">
				</div><button class="e-primary-btn has-icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" type="submit">Subscribe Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></button>
			</form>
			<div class="shape"><img alt="shape" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-36.webp') }}"></div>
		</div>
	</section>
	<!-- news-letter end -->
</main>

<!-- footer-section start -->
<footer class="container">
	<div class="footer-section footer-section-3">
		<div class="container">
			<div class="row justify-content-between row-gap-md-5 row-gap-4">
				<div class="col-xl-4 col-lg-6 col-md-7">
					<div class="footer-widget">
						<div class="about-widget">
							<div class="footer-logo">
								<a href="{{ route(('index3')) }}"><img alt="logo" src="{{ asset('assets/img/logo/logo-white.svg') }}"></a>
							</div>
							<div class="text">
								<p>Introducing our team of talented and skilled professionals who are ready to increase your productivity and bring your business.</p>
							</div>
							<div class="info">
								<p><b>We Are Available !!</b></p>
								<p>Mon-Sat: <span>10:00am to 07:30pm</span></p>
							</div>
							<div class="social-links">
								<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 adjusted-width">
					<div class="footer-widget">
						<h3 class="w-title"><span><img alt="icon" src="{{ asset('assets/img/icons/icon-1.svg') }}"></span> Quick Links</h3>
						<ul>
							<li>
								<a href="{{ route('about') }}">About Company</a>
							</li>
							<li>
								<a href="{{ route('services') }}">Our Causes</a>
							</li>
							<li>
								<a href="{{ route(('campingDonation')) }}">Investor Presentation</a>
							</li>
							<li>
								<a href="{{ route('donations') }}">Pricing Plan</a>
							</li>
							<li>
								<a href="{{ route('volunteer') }}">Meet Our Team</a>
							</li>
							<li>
								<a href="{{ route('contact') }}">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-4 col-md-5">
					<div class="footer-widget">
						<h3 class="w-title"><span><img alt="icon" src="{{ asset('assets/img/icons/icon-1.svg') }}"></span> Our Services</h3>
						<ul>
							<li>
								<a href="{{ route(('campingDetails')) }}">Tree Plantation</a>
							</li>
							<li>
								<a href="{{ route(('campingDonation')) }}">Forest Cleaning</a>
							</li>
							<li>
								<a href="{{ route(('servicesDetails')) }}">Plastic Recycling</a>
							</li>
							<li>
								<a href="{{ route('project') }}">Natural Power</a>
							</li>
							<li>
								<a href="{{ route('project') }}">Renewable Energy</a>
							</li>
							<li>
								<a href="{{ route(('projectDetails')) }}">Water Refine</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5">
					<div class="footer-widget">
						<h3 class="w-title"><span><img alt="icon" src="{{ asset('assets/img/icons/icon-1.svg') }}"></span> Get in Touch</h3>
						<div class="get-in-touch">
							<a class="footer-address" href="#">
								<div class="icon">
									<i class="fa-solid fa-location-dot"></i>
								</div>
								<div class="text">
									<h6>Address</h6>
									<p>Jones Street, New York, USA</p>
								</div></a> <a class="email" href="mailto:support@example.com">
							<div class="icon">
								<i class="fa-solid fa-paper-plane"></i>
							</div>
							<div class="text">
								<h6>Email</h6>
								<p>Support@example.com</p>
							</div></a> <a class="phone" href="tel:+70264566579">
							<div class="icon">
								<i class="fa-solid fa-phone-arrow-up-right"></i>
							</div>
							<div class="text">
								<h6>Phone</h6>
								<p>+70 264 566 579</p>
							</div></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-2">
		<div class="row">
			<div class="col-xl-12">
				<div class="footer-bottom-layout">
					<div class="footer-copyright">
						© {{ now()->year }} Econest. All Rights Reserved.
					</div>
					<div class="footer-bottom-menu">
						<ul>
							<li>
								<a href="{{ route('contact') }}">Terms & Condition</a>
							</li>
							<li>
								<a href="{{ route('contact') }}">Privacy Policy</a>
							</li>
							<li>
								<a href="{{ route('contact') }}">Support</a>
							</li>
						</ul>
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
