<!DOCTYPE html>
<html lang="en">

    @include('elements.head')

<body>

<!-- preloader start-->
@include('elements.preloader')
<!-- preloader end  -->

<!-- header-section start -->
<header class="header-section-2">
	<div class="header-bottom-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="header-bottom-layout">
						<div class="header-left-3">
							<div class="logo-wrap">
								<a href="{{ route('index') }}">
									<img src="{{ asset('assets/img/logo/logo-white.svg') }}" alt="logo"/>
								</a>
							</div>
							<nav class="main-menu-3 d-none d-xl-block">
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
							<div class="header-info-2 d-none d-xl-flex">
								<div class="header-info-icon">
									<i class="fa-regular fa-phone-volume"></i>
								</div>
								<div class="header-info-content">
									<span>Contact Us!</span>
									<p><a href="tel:+1629555-0129">+1 (629) 555-0129</a></p>
								</div>
							</div>
							<div class="header-btn-wrap d-none d-xl-flex">
								<a href="{{ route('donations') }}" class="e-primary-btn is-hover-white has-icon">
									Donate Now
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
									</span>
								</a>
							</div>
							<div class="header-bar-2 open-mobile-menu d-xl-none" data-toggle="menubar">
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

<!-- off-canvas-menubar start -->
@include('elements.menubar')
<!-- off-canvas-menubar end -->

<main>
	<!-- hero-section-2 start -->
	<section class="hero-slider-active-2">
		<div class="swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="hero-slide-2" style="background-image: url(assets/img/bg/hero-bg-2.webp)">
						<div class="container">
							<div class="hero-content-2">
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Shape this world to your heart's concept, with us</h1>
								</div>
								<div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We’r Licensed & Insured</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>100% Trusted Organization</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We Adapt Your Needs</p>
									</div>
								</div>
								<div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
									<a class="e-primary-btn has-icon" href="{{ route('about') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="s-shape-1"><img alt="s-shape-1" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-16.webp') }}"></div>
						<div class="s-shape-2"><img alt="s-shape-2" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-17.webp') }}"></div>
						<div class="blur-circle"></div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hero-slide-2" style="background-image: url(assets/img/bg/hero-bg-7.webp)">
						<div class="container">
							<div class="hero-content-2">
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Craft this journey to your spirit's dream, with us</h1>
								</div>
								<div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We’re Certified & Covered</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>100% Reliable Company</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We Fit Your Demands</p>
									</div>
								</div>
								<div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
									<a class="e-primary-btn has-icon" href="{{ route('about') }}">Start the Journey <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="s-shape-1"><img alt="s-shape-1" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-16.webp') }}"></div>
						<div class="s-shape-2"><img alt="s-shape-2" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-17.webp') }}"></div>
						<div class="blur-circle"></div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hero-slide-2" style="background-image: url(assets/img/bg/hero-bg-2.webp)">
						<div class="container">
							<div class="hero-content-2">
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Shape this world to your heart's concept, with us</h1>
								</div>
								<div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We’r Licensed & Insured</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>100% Trusted Organization</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We Adapt Your Needs</p>
									</div>
								</div>
								<div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
									<a class="e-primary-btn has-icon" href="{{ route('about') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="s-shape-1"><img alt="s-shape-1" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-16.webp') }}"></div>
						<div class="s-shape-2"><img alt="s-shape-2" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-17.webp') }}"></div>
						<div class="blur-circle"></div>
					</div>
				</div>
				<div class="swiper-slide">
					<div class="hero-slide-2" style="background-image: url(assets/img/bg/hero-bg-7.webp)">
						<div class="container">
							<div class="hero-content-2">
								<div class="title" data-animation="animate__fadeInUp" data-delay="0.3s">
									<h1>Craft this journey to your spirit's dream, with us</h1>
								</div>
								<div class="services-2" data-animation="animate__fadeInUp" data-delay="0.4s">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We’re Certified & Covered</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>100% Reliable Company</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>We Fit Your Demands</p>
									</div>
								</div>
								<div class="join-us" data-animation="animate__fadeInUp" data-delay="0.5s">
									<a class="e-primary-btn has-icon" href="{{ route('about') }}">Start the Journey <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
						<div class="s-shape-1"><img alt="s-shape-1" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-16.webp') }}"></div>
						<div class="s-shape-2"><img alt="s-shape-2" data-animation="animate__zoomIn" data-delay="0.6s" src="{{ asset('assets/img/shapes/shape-17.webp') }}"></div>
						<div class="blur-circle"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-slider-pagination-2"></div>
	</section>
	<!-- hero-section-2 end -->

	<!-- services-section start -->
	<section class="services-section p-t-120 p-t-md-100 p-t-xs-80">
		<div class="container">
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="col-xl-4 col-md-6">
					<div class="service-card">
						<div class="service-top">
							<h4>Water Conservation</h4><i class="fa-light fa-hand-holding-droplet"></i>
						</div>
						<div class="service-content">
							<p>Many desktop publishing packages and web page editors now use.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="service-card">
						<div class="service-top">
							<h4>Dust Recycling</h4><i class="fa-light fa-recycle"></i>
						</div>
						<div class="service-content">
							<p>Readable english specimen book. It has survived not only five centuries.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="service-card">
						<div class="service-top">
							<h4>Forest Cleaning</h4><i class="fa-light fa-trees"></i>
						</div>
						<div class="service-content">
							<p>Lorem Ipsum is not simply random text has roots in a piece of classical.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- services-section end -->

	<!-- why-us-section start -->
	<section class="why-us-section-2 p-t-100 p-t-xs-80 m-b-230 m-b-md-180 m-b-xs-0 p-b-5 p-b-xs-80">
		<div class="container">
			<div class="row align-items-center p-b-80">
				<div class="col-xl-6">
					<div class="thumb px-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="thumb-1">
							<img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-24.webp') }}">
							<div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
						</div>
						<div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-25.webp') }}"></div>
						<div class="thumb-3">
							<div class="shape-wrapped-thumb">
								<img alt="thumb-3" src="{{ asset('assets/img/thumbs/thumb-26.webp') }}">
								<div class="experience-shape">
									<h3><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="29">0</span>+</h3>
									<p>Years of experience</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle">
							<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Who We Are</span>
						</div>
						<div class="common-title text-start">
							<h2>Some Reasons to Choose (Econest Organization)</h2>
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
								<a class="e-primary-btn has-icon" href="{{ route('project') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
							<div class="annual-donation">
								<img alt="icon-4" src="{{ asset('assets/img/icons/icon-4.svg') }}">
								<div class="annual-text">
									<p>Annual Donation</p>
									<h5>$2,056,00</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- company-achievements start -->
			<div class="company-achievements" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
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
					<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36.2">0</span>k</h2>
					<p>Complete Projects</p>
				</div>
				<div class="achievement">
					<i class="fa-light fa-users-medical"></i>
					<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
					<p>Experienced Members</p>
				</div>
			</div><!-- company-achievements end -->
		</div>
		<div class="why-us-section-2-bg">
			<div class="left-img"><img alt="bg" src="{{ asset('assets/img/bg/who-we-are-bg.webp') }}"></div>
			<div class="right-img"><img alt="bg" src="{{ asset('assets/img/bg/why-us-bg.webp') }}"></div>
		</div>
	</section>
	<!-- why-us-section end -->

	<!-- dust-recycling-section start -->
	<section class="dust-recycling-section" style="background-image: url(assets/img/bg/dust-recycling-bg.webp)">
		<div class="container">
			<div class="row justify-content-center align-items-xl-start align-items-center">
				<div class="col-lg-10 col-12 order-2 order-lg-1">
					<div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="dust-recycle-top">
							<h5>Dust Recycling</h5>
							<div class="services-4">
								<div class="service-2">
									<i class="fa-light fa-badge-check"></i>
									<p>Work With Professional Team</p>
								</div>
								<div class="service-2">
									<i class="fa-light fa-badge-check"></i>
									<p>Emergency Solution Anytime</p>
								</div>
							</div>
						</div>
						<div class="campaign-progress">
							<div class="environmental">
								<div class="top">
									<p>Environmental Experience</p>
									<p>82%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="82" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 82%"></div>
								</div>
							</div>
							<div class="campaigns">
								<div class="top">
									<p>Campaigns</p>
									<p>94%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="94" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 94%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 order-1 order-lg-2 m-b-md-60 m-b-xs-60" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="btn-layer">
						<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- dust-recycling-section end -->

	<!-- our-camping-section-2 start -->
	<section class="our-camping-section-2 p-t-120 p-t-md-100 p-b-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="text-center">
						<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Camping</span>
						</div>
						<div class="common-title mb-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Your Gift For a Greener Tomorrow</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="camping-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="camping-card-2">
										<div class="thumb">
											<a href="{{ route(('campingDonation')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-4.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('campingDonation')) }}">Reforestation and Tree Planting Campaign 2025</a></h3>
													</div>
												</div>
												<div class="d-top">
													<p>Donation Complete</p>
													<p>72%</p>
												</div>
												<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress" role="progressbar">
													<div class="progress-bar" style="width: 72%"></div>
												</div>
												<div class="fund">
													<p>Raised: <span>$9,650</span></p>
													<p>Goal: <span>$16,560</span></p>
												</div>
												<div class="d-bottom">
													<a class="e-primary-btn has-icon d-btn" href="{{ route(('campingDonation')) }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="camping-card-2">
										<div class="thumb">
											<a href="{{ route(('campingDonation')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-3.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('campingDonation')) }}">Sustainable Energy for All: Why Your Donation Matters</a></h3>
													</div>
												</div>
												<div class="d-top">
													<p>Donation Complete</p>
													<p>72%</p>
												</div>
												<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress" role="progressbar">
													<div class="progress-bar" style="width: 72%"></div>
												</div>
												<div class="fund">
													<p>Raised: <span>$9,650</span></p>
													<p>Goal: <span>$16,560</span></p>
												</div>
												<div class="d-bottom">
													<a class="e-primary-btn has-icon d-btn" href="{{ route(('campingDonation')) }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="camping-card-2">
										<div class="thumb">
											<a href="{{ route(('campingDonation')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-2.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('campingDonation')) }}">Protecting Endangered Species and Their Habitats</a></h3>
													</div>
												</div>
												<div class="d-top">
													<p>Donation Complete</p>
													<p>72%</p>
												</div>
												<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress" role="progressbar">
													<div class="progress-bar" style="width: 72%"></div>
												</div>
												<div class="fund">
													<p>Raised: <span>$9,650</span></p>
													<p>Goal: <span>$16,560</span></p>
												</div>
												<div class="d-bottom">
													<a class="e-primary-btn has-icon d-btn" href="{{ route(('campingDonation')) }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="camping-card-2">
										<div class="thumb">
											<a href="{{ route(('campingDonation')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-3.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('campingDonation')) }}">Sustainable Energy for All: Why Your Donation Matters</a></h3>
													</div>
												</div>
												<div class="d-top">
													<p>Donation Complete</p>
													<p>72%</p>
												</div>
												<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress" role="progressbar">
													<div class="progress-bar" style="width: 72%"></div>
												</div>
												<div class="fund">
													<p>Raised: <span>$9,650</span></p>
													<p>Goal: <span>$16,560</span></p>
												</div>
												<div class="d-bottom">
													<a class="e-primary-btn has-icon d-btn" href="{{ route(('campingDonation')) }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="camping-button-prev-2">
							<i class="fa-regular fa-arrow-left"></i>
						</div>
						<div class="camping-button-next-2">
							<i class="fa-regular fa-arrow-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our-camping-section-2 end -->

	<!-- completed-project-2 start -->
	<section class="completed-project-2 m-b-120 m-b-xs-100 m-b-xs-80">
		<div class="container text-center m-b-50 m-b-xs-40">
			<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Completed Project</span>
			</div>
			<div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
				<h2>Explore Our Successful Camping Project😍</h2>
			</div>
		</div>
		<div class="completed-project-slider-active-2" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="project-card-2">
							<div class="thumb">
								<a href="{{ route(('campingDetails')) }}"><img alt="thumb-12" src="{{ asset('assets/img/thumbs/thumb-12.webp') }}"></a>
								<div class="details-btn-2">
									<i class="fa-regular fa-arrow-right-long"></i>
								</div>
								<div class="content">
									<h5>Forest Cleaning</h5>
									<p>Energy consulting involves providing of advice and guidance on energy</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="project-card-2">
							<div class="thumb">
								<a href="{{ route(('campingDetails')) }}"><img alt="thumb-11" src="{{ asset('assets/img/thumbs/thumb-11.webp') }}"></a>
								<div class="details-btn-2">
									<i class="fa-regular fa-arrow-right-long"></i>
								</div>
								<div class="content">
									<h5>Waste Management</h5>
									<p>Energy consulting involves providing of advice and guidance on energy</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="project-card-2">
							<div class="thumb">
								<a href="{{ route(('campingDetails')) }}"><img alt="thumb-13" src="{{ asset('assets/img/thumbs/thumb-13.webp') }}"></a>
								<div class="details-btn-2">
									<i class="fa-regular fa-arrow-right-long"></i>
								</div>
								<div class="content">
									<h5>Cleaning & Recycling</h5>
									<p>Energy consulting involves providing of advice and guidance on energy</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="project-card-2">
							<div class="thumb">
								<a href="{{ route(('campingDetails')) }}"><img alt="thumb-11" src="{{ asset('assets/img/thumbs/thumb-11.webp') }}"></a>
								<div class="details-btn-2">
									<i class="fa-regular fa-arrow-right-long"></i>
								</div>
								<div class="content">
									<h5>Waste Management</h5>
									<p>Energy consulting involves providing of advice and guidance on energy</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="completed-project-pagination-2"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-53.webp') }}"></div>
		<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/shapes/shape-52.webp') }}"></div>
	</section>
	<!-- completed-project-2 end -->

	<!-- volunteer-section-2 start -->
	<section class="volunteer-section-2 p-b-120 p-b-md-100 p-b-xs-80">
		<div class="container text-center">
			<div class="m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>We Are Volunteer</span>
				</div>
				<div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Together For The Planet</h2>
				</div>
			</div>
			<div class="row row-gap-4 p-b-60" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="volunteer-card-2">
						<div class="thumb">
							<a href="{{ route(('volunteerDetails')) }}"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-27.webp') }}"></a>
							<div class="socials">
								<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
								<div class="social-links">
									<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
								</div>
							</div><a class="author-info" href="{{ route(('volunteerDetails')) }}">
							<h5>Joshua Sendu</h5>
							<p>CEO-Founder</p></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="volunteer-card-2">
						<div class="thumb">
							<a href="{{ route(('volunteerDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-28.webp') }}"></a>
							<div class="socials">
								<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
								<div class="social-links">
									<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
								</div>
							</div><a class="author-info" href="{{ route(('volunteerDetails')) }}">
							<h5>John Maxwell</h5>
							<p>Team Leader</p></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="volunteer-card-2">
						<div class="thumb">
							<a href="{{ route(('volunteerDetails')) }}"><img alt="thumb-3" src="{{ asset('assets/img/thumbs/thumb-29.webp') }}"></a>
							<div class="socials">
								<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
								<div class="social-links">
									<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
								</div>
							</div><a class="author-info" href="{{ route(('volunteerDetails')) }}">
							<h5>Bm Ashik (Moni)</h5>
							<p>Sr. Volunteer</p></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
					<div class="volunteer-card-2">
						<div class="thumb">
							<a href="{{ route(('volunteerDetails')) }}"><img alt="thumb-4" src="{{ asset('assets/img/thumbs/thumb-30.webp') }}"></a>
							<div class="socials">
								<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
								<div class="social-links">
									<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
								</div>
							</div><a class="author-info" href="{{ route(('volunteerDetails')) }}">
							<h5>Denial Pasha</h5>
							<p>Volunteer</p></a>
						</div>
					</div>
				</div>
			</div>
			<div class="contact-details" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="details-btn">
					<a class="e-primary-btn has-icon" href="{{ route('volunteer') }}">View All Volunteer <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
				<div class="join-us-btn">
					<a class="review-btn" href="{{ route(('beVolunteer')) }}"><img alt="shape-12" src="{{ asset('assets/img/shapes/shape-12.webp') }}"> <span>If you want can join us</span> <i class="fa-solid fa-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section-2 end -->

	<!-- testimonial-section-2 start -->
	<section class="testimonial-section-2 p-t-120 p-t-md-100 p-t-xs-80 p-b-20" style="background-image: url(assets/img/bg/testimonial-bg.webp)">
		<div class="container">
			<div class="row align-items-end m-b-60 m-b-xs-40">
				<div class="col-xl-6 col-md-7 m-b-xs-20">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Testimonials</span>
					</div>
					<div class="common-title m-b-0 style-color-3 text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>Why They Believe In Us</h2>
					</div>
				</div>
				<div class="col-xl-6 col-md-5 text-md-end">
					<a class="e-primary-btn has-icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" href="{{ route(('campingDetails')) }}">View All Reviews <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
				<div class="col-xl-6 m-b-30">
					<div class="testimonial-card-2">
						<div class="thumb">
							<img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-34.webp') }}"> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
						</div>
						<div class="card-content">
							<h4>Forest Cleaning</h4>
							<div class="review">
								<p>I was very impressed 😍 involves advice guidance on energy-related for matters professionals to design and maintain your garden. 🙋</p>
							</div>
							<div class="author-details">
								<h5>Penelope Miller <span>(Arjun)</span></h5>
								<h6>Sr. Volunteer</h6>
							</div>
						</div>
						<div class="quote-icon"><img alt="icon" src="{{ asset('assets/img/icons/icon-5.svg') }}"></div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="testimonial-card-2">
						<div class="thumb">
							<img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-35.webp') }}"> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
						</div>
						<div class="card-content">
							<h4>Tree Plantation</h4>
							<div class="review">
								<p>I was very impressed 😍 involves advice guidance on energy-related for matters professionals to design and maintain your garden. 🙋</p>
							</div>
							<div class="author-details">
								<h5>Matthew Emily</h5>
								<h6>Sr. Volunteer</h6>
							</div>
						</div>
						<div class="quote-icon"><img alt="icon" src="{{ asset('assets/img/icons/icon-5.svg') }}"></div>
					</div>
				</div>
			</div><!-- major-partners start -->
			<div class="major-partners style-2 p-t-100 p-t-xs-80">
				<div class="partners-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="line-right"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
					<h3>Major Partners</h3>
					<div class="line"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
				</div>
				<div class="row p-t-60 p-t-xs-40">
					<div class="col-xl-12">
						<div class="partner-marquee">
							<div class="partner-marquee-layout">
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-2.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-3.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-4.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-5.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-6.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-7.webp') }}"></div>
							</div>
							<div class="partner-marquee-layout">
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-2.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-3.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-4.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-5.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-6.webp') }}"></div>
								<div class="partner-1"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-7.webp') }}"></div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- major-partners end -->
		</div>
	</section>
	<!-- testimonial-section-2 end -->

	<!-- faq-section start -->
	<section class="faq-section p-t-180 p-t-md-160 p-t-xs-140 p-b-120 p-b-md-100 p-b-xs-80" style="background-image: url(assets/img/bg/why-us-bg.webp)">
		<div class="container">
			<div class="row faq">
				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="accordion faq-accordion" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseOne" data-bs-toggle="collapse" type="button"><span class="accordion-title">1.</span>How do I get started? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseOne">
								<div class="accordion-body">
									The point of using lorem ipsum is that has more-less packages normal commercial management in construction ensures the planning, execution and coordination.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse" type="button"><span class="accordion-title">2.</span>What fees do you charge? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseTwo">
								<div class="accordion-body">
									The point of using lorem ipsum is that has more-less packages normal commercial management in construction ensures the planning, execution and coordination.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseThree" aria-expanded="false" class="accordion-button" data-bs-target="#flush-collapseThree" data-bs-toggle="collapse" type="button"><span class="accordion-title">3.</span>Where should I incorporate my business? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" id="flush-collapseThree">
								<div class="accordion-body">
									The point of using lorem ipsum is that has more-less packages normal commercial management in construction ensures the planning, execution and coordination.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFour" data-bs-toggle="collapse" type="button"><span class="accordion-title">4.</span>What type of company is measured? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFour">
								<div class="accordion-body">
									The point of using lorem ipsum is that has more-less packages normal commercial management in construction ensures the planning, execution and coordination.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFive" data-bs-toggle="collapse" type="button"><span class="accordion-title">5.</span>How can I safely use files? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFive">
								<div class="accordion-body">
									The point of using lorem ipsum is that has more-less packages normal commercial management in construction ensures the planning, execution and coordination.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="common-subtitle">
						<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Question & Answer</span>
					</div>
					<div class="common-title text-start">
						<h2>Frequently Asked Question <span>?</span></h2>
					</div>
					<div class="text">
						<p>The implant fixture is first placed, so that it ilikely to then a dental prosthetic is added then dental prosthetic occaecat laborum.</p>
					</div>
					<div class="blog-btn">
						<a class="e-primary-btn has-icon" href="{{ route('contact') }}">Have You Any Questions? <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
					</div>
					<div class="top-right">
						<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
						<div class="people-joined">
							<h5>2603</h5><span>Peoples Registered</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- faq-section end -->

	<!-- our-events-section-2 start -->
	<section class="our-events-section-2 p-t-120 p-b-120 p-t-md-100 p-b-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row align-items-end m-b-60 m-b-xs-40">
				<div class="col-xl-6 col-md-8 m-b-xs-20">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Arrange</span>
					</div>
					<div class="common-title m-b-0 style-color-3 text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>Econest Upcoming Events</h2>
					</div>
				</div>
				<div class="col-xl-6 col-md-4 text-md-end">
					<a class="e-primary-btn has-icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" href="{{ route('camping') }}">View All Events <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
				<div class="col-xl-12">
					<div class="event-card-2 m-b-30">
						<div class="event-thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-36.webp') }}"></a>
							<div class="event-date">
								<h5>12 Jan-20 Jan, 2025</h5>
							</div>
						</div>
						<div class="card-content">
							<div class="event-card-title">
								<h2><a href="{{ route(('campingDetails')) }}">The forest is our life, it is our job to keep the forest clean</a></h2>
							</div>
							<div class="address">
								<div class="time">
									<i class="fa-regular fa-clock"></i> <span>8:30am - 4:00pm</span>
								</div>
								<div class="location">
									<i class="fa-regular fa-location-dot"></i> <span>Jones Street, New York</span>
								</div>
							</div>
							<div class="join-event">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon" href="{{ route(('campingDetails')) }}">Join Event <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
								<div class="top-right">
									<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
									<div class="people-joined">
										<h5>236</h5><span>Joined People</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="event-card-2">
						<div class="event-thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-37.webp') }}"></a>
							<div class="event-date">
								<h5>12 Jan-20 Jan, 2025</h5>
							</div>
						</div>
						<div class="card-content">
							<div class="event-card-title">
								<h2><a href="{{ route(('campingDetails')) }}">The forest is our life, it is our job to keep the forest clean</a></h2>
							</div>
							<div class="address">
								<div class="time">
									<i class="fa-regular fa-clock"></i> <span>9:00am - 6:00pm</span>
								</div>
								<div class="location">
									<i class="fa-regular fa-location-dot"></i> <span>85 Great Portland Street, London</span>
								</div>
							</div>
							<div class="join-event">
								<div class="blog-btn">
									<a class="e-primary-btn has-icon" href="{{ route(('campingDetails')) }}">Join Event <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
								<div class="top-right">
									<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
									<div class="people-joined">
										<h5>162</h5><span>Joined People</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-54.webp') }}"></div>
	</section>
	<!-- our-events-section-2 end -->

	<!-- latest-blog-section-2 start -->
	<section class="latest-blog-section-2 p-t-100 p-b-100 p-b-md-80 p-t-xs-80 p-b-xs-60">
		<div class="container">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>News & Blog</span>
				</div>
				<div class="common-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Check Latest Blog Post</h2>
				</div>
			</div>
			<div class="row row-gap-4 text-start" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-4 col-md-6 col-sm-12">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-31.webp') }}"></a>
							<div class="event-date">
								<h2>09</h2>
								<h5>Jan</h5>
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
									<h3><a href="{{ route(('blogDetails')) }}">The Power of One: How Individual Actions Save the Planet</a></h3>
								</div>
							</div>
							<div class="content-bottom">
								<a class="e-primary-btn has-icon read-more-btn has-small" href="{{ route(('blogDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-32.webp') }}"></a>
							<div class="event-date">
								<h2>09</h2>
								<h5>Jan</h5>
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
									<h3><a href="{{ route(('blogDetails')) }}">Sustainable Energy for All: Why Your Donation Matters</a></h3>
								</div>
							</div>
							<div class="content-bottom">
								<a class="e-primary-btn has-icon read-more-btn has-small" href="{{ route(('blogDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6 col-sm-12">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}"><img alt="thumb-3" src="{{ asset('assets/img/thumbs/thumb-33.webp') }}"></a>
							<div class="event-date">
								<h2>09</h2>
								<h5>Jan</h5>
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
									<h3><a href="{{ route(('blogDetails')) }}">Water Conservation: Small Changes, Big Impact</a></h3>
								</div>
							</div>
							<div class="content-bottom">
								<a class="e-primary-btn has-icon read-more-btn has-small" href="{{ route(('blogDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- latest-blog-section-2 end -->

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