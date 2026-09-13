<!DOCTYPE html>
<html lang="en">

    @include('elements.head')

<body>
<!-- preloader start-->
@include('elements.preloader')
<!-- preloader end  -->

<!-- header-section start -->
<header class="header-section-5">
	<div class="top-bar d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="top-bar-content text-center">
						<div class="text-wrap">
							<img src="{{ asset('assets/img/icons/calendar-time.svg') }}" alt="icon"/>
							<span
							>Join Our Event (28 Nov, 2026) New Market, California.</span
							>
						</div>
						<a href="{{ route('donations') }}" class="e-primary-btn top-btn is-hover-white top-btn-2">
							Donate Now
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="header-bottom">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="header-bottom-layout">
							<div class="header-left-4">
								<div class="logo-wrap">
									<a href="{{ route('index') }}">
										<img src="{{ asset('assets/img/logo/logo-white.svg') }}" alt="logo"/>
									</a>
								</div>
								<nav class="main-menu-2 d-none d-xl-block">
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
										<span>Any Questions?</span>
										<p><a href="tel:+1629555-0129">+1 (629) 555-0129</a></p>
									</div>
								</div>
								<div class="header-btn-wrap d-none d-xl-flex">
									<a href="{{ route('donations') }}" class="e-primary-btn has-icon">
										Donate Now
										<span class="icon-wrap">
					                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
										</span>
									</a>
								</div>
								<div class="header-bar-2 open-mobile-menu d-xl-none">
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
	</div>
</header>
<!-- header-section end -->

<main>
	<!-- hero-section start -->
	<section class="hero-section-5" style="background-image: url(assets/img/bg/hero-bg-5.webp)">
		<div class="container">
			<div class="hero-content-5">
				<div class="title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<h1>Making a Difference, One Life at a Time</h1>
				</div>
				<div class="text" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<p>As the world faces increasing environmental challenges sustainable and eco-friendly solutions</p>
				</div><a class="e-primary-btn has-icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" href="{{ route('donations') }}">Get Involved <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				<div class="icon-1"><img alt="icon-1" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-14.svg') }}"></div>
				<div class="icon-2"><img alt="icon-2" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-15.svg') }}"></div>
			</div>
			<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-39.webp') }}"></div>
		</div>
	</section>
	<!-- hero-section end -->

	<!-- make-donate-section start -->
	<section class="make-donate-section">
		<div class="container">
			<div class="make-donate-layout" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="row align-items-center">
					<div class="col-xl-5">
						<div class="donate-left" style="background-image: url(assets/img/shapes/shape-43.webp)">
							<h4>Make a Donate to Change a Life!</h4>
							<p>❤️ Every contribution makes a difference.</p>
						</div>
					</div>
					<div class="col-xl-7">
						<div class="donate-right">
							<div class="choose-currency">
								<p>Choose Currency:</p><button class="amount">$10</button> <button class="amount">$25</button> <button class="amount">$50</button> <button class="amount">$100</button> <button class="amount">$250</button> <button class="custom-amount"><i class="fa-solid fa-sliders"></i> Custom Amount</button>
							</div>
							<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress" role="progressbar">
								<div class="progress-bar" style="width: 45%"></div>
							</div>
							<div class="bottom">
								<div class="icon-wrap">
									<input class="selected-amount" placeholder="0" value="100"> <i class="fa-solid fa-dollar-sign"></i>
								</div><a class="donate-btn" href="#">Donate Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- make-donate-section end -->

	<!-- services-section start -->
	<section class="services-section-3 p-t-100 p-t-xs-80">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="section-top-9">
						<div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<span>Start donating poor people</span>
						</div>
						<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Connects Nonprofits, Donors, & Companies in Every Country</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Food<br>
								Initiatives
							</h4>
							<i class="fa-light fa-pot-food"></i>
						</div>
						<div class="service-content">
							<p>Many desktop publishing packages and web page editors now use.</p>
						</div>
						<div class="i-shape">
							<h1>01</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Medical<br>
								Conservation
							</h4>
							<i class="fa-light fa-pills"></i>
						</div>
						<div class="service-content">
							<p>Many desktop publishing packages and web page editors now use.</p>
						</div>
						<div class="i-shape">
							<h1>02</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Support<br>
								For Education
							</h4>
							<i class="fa-light fa-graduation-cap"></i>
						</div>
						<div class="service-content">
							<p>Many desktop publishing packages and web page editors now use.</p>
						</div>
						<div class="i-shape">
							<h1>03</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="service-card-3">
						<div class="service-top">
							<h4>Clean<br>
								Water Security
							</h4>
							<i class="fa-light fa-bottle-water"></i>
						</div>
						<div class="service-content">
							<p>Many desktop publishing packages and web page editors now use.</p>
						</div>
						<div class="i-shape">
							<h1>04</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="icon"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-15.svg') }}"></div>
	</section>
	<!-- services-section end -->

	<!-- why-us-section start -->
	<section class="why-us-section-4 p-t-120 p-b-100 p-t-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row row-gap-5 align-items-center">
				<div class="col-xl-6">
					<div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="thumb-1">
							<img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-96.webp') }}">
							<div class="s-shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
						</div>
						<div class="thumb-2"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-97.webp') }}"></div>
						<div class="thumb-3">
							<div class="shape-wrapped-thumb"><img alt="thumb-3" src="{{ asset('assets/img/thumbs/thumb-98.webp') }}"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="why-us-content-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="common-subtitle text-uppercase">
							<span>About Us</span>
						</div>
						<div class="common-title text-start">
							<h2>Bringing Change, One Act of Kindness at a Time</h2>
						</div>
						<div class="text">
							<p>At Econest, we believe in a world where every individual has access to basic necessities, education, healthcare, and disaster relief. With your support, we deliver programs that uplift communities and create lasting impact.</p>
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
							<a class="e-primary-btn has-icon" href="{{ route('about') }}">More About Us <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							<div class="annual-donation">
								<img alt="icon-4" src="{{ asset('assets/img/icons/icon-4.svg') }}">
								<div class="annual-text">
									<p>Annual Donation</p>
									<h5>$2,000,00</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-40.webp') }}"></div>
		<div class="icon-1"><img alt="icon-1" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-14.svg') }}"></div>
		<div class="icon-2"><img alt="icon-2" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-16.svg') }}"></div>
	</section>
	<!-- why-us-section end -->

	<!-- our-camping-section-2 start -->
	<section class="our-camping-section-3 p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url('assets/img/bg/our-camping-bg-2.webp')">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="section-top-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="common-subtitle text-uppercase">
							<span>Start donating poor people</span>
						</div>
						<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Introduce Our Campaigns</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-12">
					<div class="camping-slider-active-3">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="camping-card-2">
										<div class="thumb">
											<a href="{{ route('donations') }}"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-99.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route('donations') }}">Help Children Rise out Life of Poverty</a></h3>
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
													<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="camping-card-2 active">
										<div class="thumb">
											<a href="{{ route('donations') }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-100.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route('donations') }}">Gift an Education Make An Life Better!</a></h3>
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
													<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="camping-card-2">
										<div class="thumb">
											<a href="{{ route('donations') }}"><img alt="thumb-3" src="{{ asset('assets/img/thumbs/thumb-101.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route('donations') }}">Lifeskills for Children in South Africa</a></h3>
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
													<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="camping-card-2 active">
										<div class="thumb">
											<a href="{{ route('donations') }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-100.webp') }}"></a>
											<div class="date">
												<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
											</div>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route('donations') }}">Gift an Education… Make An Life Better!</a></h3>
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
													<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="camping-button-prev-3">
							<i class="fa-regular fa-arrow-left"></i>
						</div>
						<div class="camping-button-next-3">
							<i class="fa-regular fa-arrow-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-41.webp') }}"></div>
		<div class="icon-1"><img alt="icon-1" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-15.svg') }}"></div>
	</section>
	<!-- our-camping-section-2 end -->

	<!-- why-us-section start -->
	<section class="why-us-section-5 p-t-120 p-b-160 p-t-md-100 p-b-md-120 p-b-lg-140 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="row row-gap-5 align-items-center">
				<div class="col-xl-6">
					<div class="why-us-content-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="common-subtitle text-uppercase">
							<span>Why Choose Us</span>
						</div>
						<div class="common-title text-start">
							<h2>We take practical steps for 100% transparency.</h2>
						</div>
						<div class="text">
							<p>We directly support communities in need, ensuring every donation makes a tangible difference.</p>
						</div>
						<div class="services">
							<div class="service-left">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Specialized Company</p>
								</div>
							</div>
							<div class="service-right">
								<div class="service">
									<i class="fa-solid fa-check"></i>
									<p>Dependable Services</p>
								</div>
							</div>
						</div>
						<div class="our-progress">
							<div class="progress-1">
								<div class="d-top">
									<p>Education Support</p>
									<p>96%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="96" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 96%"></div>
								</div>
							</div>
							<div class="progress-1">
								<div class="d-top">
									<p>Healthcare Access</p>
									<p>72%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 72%"></div>
								</div>
							</div>
							<div class="progress-1">
								<div class="d-top">
									<p>Food & Shelter Support</p>
									<p>84%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="84" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 84%"></div>
								</div>
							</div>
						</div>
						<div class="annual-donation-wrap">
							<a class="e-primary-btn has-icon" href="{{ route('project') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="thumb px-xl-5 left" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="thumb-1"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-106.webp') }}"></div>
						<div class="thumb-2">
							<div class="btn-wrapped-thumb">
								<img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-107.webp') }}">
								<div class="btn-layer-3">
									<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-40.webp') }}"></div>
		<div class="icon-1"><img alt="icon" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-14.svg') }}"></div>
	</section>
	<!-- why-us-section end -->

	<!-- donate-to-us-section start -->
	<section class="donate-to-us-section" style="background-image: url(assets/img/bg/make-donate-bg.webp)">
		<div class="container">
			<div class="donate-to-us-layout">
				<div class="become-volunteer-card" data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
					<div class="card-icon">
						<i class="fa-light fa-users-medical"></i>
					</div>
					<h2>Become A Volunteer?</h2>
					<p>Join our team and be a force for good.</p><a class="e-primary-btn has-icon" href="{{ route('contact') }}">Contact Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
				<div class="donate-us-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="card-icon">
						<i class="fa-solid fa-hand-holding-circle-dollar"></i>
					</div>
					<h2>Make Donation To Us?</h2>
					<p>Every contribution goes towards life-changing initiatives.</p><a class="e-primary-btn has-icon" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
				<div class="icon-shape-1"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/shapes/shape-44.webp') }}"></div>
				<div class="icon-shape-2"><img alt="icon" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="1000" src="{{ asset('assets/img/icons/icon-15.svg') }}"></div>
			</div>
		</div>
	</section>
	<!-- donate-to-us-section end -->

	<!-- we-are-friends-section start -->
	<section class="we-are-friends-section m-t-160 m-t-md-120 m-t-xs-100 m-b-120 m-b-md-100 m-b-xs-80">
		<div class="container">
			<div class="row row-gap-5">
				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="friends-left">
						<div class="common-subtitle text-uppercase">
							<span>We Are Friends</span>
						</div>
						<div class="common-title text-start">
							<h2>Meet Our The Best Volunteers Team</h2>
						</div>
						<div class="text">
							<p>Our team is a mix of creatives, strategists, and innovators who work together to bring you the best, product/service.</p>
						</div>
						<div class="blog-btn">
							<a class="e-primary-btn has-icon" href="{{ route(('beVolunteer')) }}">Become a Volunteer <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
						</div>
						<div class="top-right">
							<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
							<div class="people-joined">
								<h5>2603</h5><span>Peoples Registered</span>
							</div>
						</div>
						<div class="shape"><img alt="icon" src="{{ asset('assets/img/icons/icon-15.svg') }}"></div>
					</div>
				</div>
				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="friends-card m-b-20">
						<div class="row">
							<div class="col-md-6">
								<div class="author-details">
									<div class="author-info">
										<h5>Joshua Sendu</h5>
										<p>CEO-Founder</p>
										<div class="description">
											<p>The point of using lorem ipsum is that has more-less packages normal commercial</p>
										</div>
									</div>
									<div class="socials">
										<div class="social-links">
											<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumb">
									<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-17.webp') }}">
									<div class="details-btn-3">
										<i class="fa-regular fa-arrow-right-long"></i>
									</div>
									<div class="category"><img alt="category" src="{{ asset('assets/img/shapes/shape-48.webp') }}"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="friends-card m-b-20">
						<div class="row">
							<div class="col-md-6">
								<div class="author-details">
									<div class="author-info">
										<h5>Joshua Sendu</h5>
										<p>Head Volunteer</p>
										<div class="description">
											<p>The point of using lorem ipsum is that has more-less packages normal commercial</p>
										</div>
									</div>
									<div class="socials">
										<div class="social-links">
											<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumb">
									<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-18.webp') }}">
									<div class="details-btn-3">
										<i class="fa-regular fa-arrow-right-long"></i>
									</div>
									<div class="category"><img alt="category" src="{{ asset('assets/img/shapes/shape-49.webp') }}"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="friends-card m-b-20">
						<div class="row">
							<div class="col-md-6">
								<div class="author-details">
									<div class="author-info">
										<h5>Joshua Sendu</h5>
										<p>Volunteer</p>
										<div class="description">
											<p>The point of using lorem ipsum is that has more-less packages normal commercial</p>
										</div>
									</div>
									<div class="socials">
										<div class="social-links">
											<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumb">
									<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-19.webp') }}">
									<div class="details-btn-3">
										<i class="fa-regular fa-arrow-right-long"></i>
									</div>
									<div class="category"><img alt="category" src="{{ asset('assets/img/shapes/shape-50.webp') }}"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="friends-card">
						<div class="row">
							<div class="col-md-6">
								<div class="author-details">
									<div class="author-info">
										<h5>Joshua Sendu</h5>
										<p>Volunteer</p>
										<div class="description">
											<p>The point of using lorem ipsum is that has more-less packages normal commercial</p>
										</div>
									</div>
									<div class="socials">
										<div class="social-links">
											<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="thumb">
									<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-20.webp') }}">
									<div class="details-btn-3">
										<i class="fa-regular fa-arrow-right-long"></i>
									</div>
									<div class="category"><img alt="category" src="{{ asset('assets/img/shapes/shape-51.webp') }}"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- we-are-friends-section end -->

	<!-- testimonial-section-2 start -->
	<section class="testimonial-section-2 p-t-120 p-t-md-100 p-b-20 p-t-xs-80" style="background-image: url(assets/img/bg/testimonial-bg-3.webp)">
		<div class="container">
			<div class="section-top-8">
				<div class="left">
					<div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<span>Testimonials</span>
					</div>
					<div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>What People Saying</h2>
					</div>
				</div>
				<div class="right text-end" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<a class="e-primary-btn has-icon" href="{{ route(('campingDetails')) }}">View All Reviews <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="col-xl-6 m-b-0 m-b-xs-20 m-b-md-30 m-b-lg-30">
					<div class="testimonial-card-2">
						<div class="thumb">
							<a href="#"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-104.webp') }}"></a> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
						</div>
						<div class="card-content">
							<h4>Forest Cleaning</h4>
							<div class="review">
								<p>I was very impressed 😍 involves providing of advice and guidance on energy-related for matters. Understand the advantages hiring professionals to design and maintain your garden. 🙋</p>
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
							<a href="#"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-105.webp') }}"></a> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
						</div>
						<div class="card-content">
							<h4>Tree Plantation</h4>
							<div class="review">
								<p>I was very impressed 😍 involves providing of advice and guidance on energy-related for matters. Understand the advantages hiring professionals to design and maintain your garden. 🙋</p>
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
			<div class="major-partners p-t-100 p-b-120 p-t-xs-80 p-b-xs-80">
				<div class="partners-title-2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="line-right"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
					<h3>Major Partners</h3>
					<div class="line"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
				</div>
				<div class="row p-t-60">
					<div class="col-xl-12">
						<div class="partner-marquee">
							<div class="partner-marquee-layout">
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-2.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-3.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-4.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-5.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-6.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-7.webp') }}"></div>
							</div>
							<div class="partner-marquee-layout">
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-2.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-3.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-4.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-5.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-6.webp') }}"></div>
								<div class="partner-3"><img alt="partner-logo" src="{{ asset('assets/img/logo/logo-7.webp') }}"></div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- major-partners end -->
			<div class="shape-1"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-41.webp') }}"></div>
			<div class="shape-2"><img alt="shape-2" src="{{ asset('assets/img/shapes/shape-42.webp') }}"></div>
		</div>
	</section>
	<!-- testimonial-section-2 end -->

	<!-- our-events-section start -->
	<section class="our-events-section-3 p-t-120 p-t-md-100 p-t-xs-80 p-b-160 p-b-lg-120 p-b-md-100 p-b-xs-80">
		<div class="container text-center">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle text-uppercase" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Upcoming Event</span>
				</div>
				<div class="common-title m-b-0 text-center" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Our Events, Let's <img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> All Participate</h2>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-lg-6 col-12">
					<div class="event-card">
						<div class="thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-102.webp') }}"></a>
						</div>
						<div class="card-content">
							<div class="event-card-top p-t-20">
								<div class="top-left">
									<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar-2.svg') }}">
									<div class="event-date">
										<h3>20 <span>March<br>
									in 2026</span></h3>
									</div>
								</div>
								<div class="top-right">
									<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
									<div class="people-joined">
										<h5>236</h5><span>Joined People</span>
									</div>
								</div>
							</div>
							<div class="event-card-middle text-start">
								<h2><a href="{{ route(('campingDetails')) }}">African History of One Tribe</a></h2>
								<div class="address">
									<div class="location">
										<i class="fa-regular fa-location-dot"></i> <span>Jones Street, New York</span>
									</div>
									<div class="time">
										<i class="fa-regular fa-clock"></i> <span>8:30am - 4:00pm</span>
									</div>
								</div>
								<div class="event-btn">
									<a class="e-primary-btn has-icon" href="{{ route(('campingDetails')) }}">Join Event <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="event-card">
						<div class="thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-103.webp') }}"></a>
						</div>
						<div class="card-content">
							<div class="event-card-top p-t-20">
								<div class="top-left">
									<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar-2.svg') }}">
									<div class="event-date">
										<h3>30 <span>February<br>
									in 2026</span></h3>
									</div>
								</div>
								<div class="top-right">
									<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
									<div class="people-joined">
										<h5>49</h5><span>Joined People</span>
									</div>
								</div>
							</div>
							<div class="event-card-middle text-start">
								<h2><a href="{{ route(('campingDetails')) }}">Youth Leadership Program</a></h2>
								<div class="address">
									<div class="location">
										<i class="fa-regular fa-location-dot"></i> <span>Los Angeles</span>
									</div>
									<div class="time">
										<i class="fa-regular fa-clock"></i> <span>10:30am - 4:00pm</span>
									</div>
								</div>
								<div class="blog-btn">
									<a class="e-primary-btn has-icon" href="{{ route(('campingDetails')) }}">Join Event <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="shape"><img alt="shape" src="{{ asset('assets/img/shapes/shape-40.webp') }}"></div>
	</section>
	<!-- our-events-section end -->
</main>

<!-- footer-section start -->
<footer class="footer-section-5 p-t-125 p-t-xs-80" style="background-image: url(assets/img/bg/footer-bg-2.webp)">
	<div class="container">
		<div class="footer-top">
			<div class="left">
				<div class="common-title text-start">
					<h2>Subscribe And Receive Weekly Our Newsletter</h2>
				</div>
			</div>
			<div class="right">
				<div class="subscribe-form-2">
					<form action="#">
						<div class="input-wrap">
							<input placeholder="ashikulislambsl@gmail.com" type="text">
						</div>
						<div class="policy-wrap">
							<div class="input-button">
								<button class="e-primary-btn has-icon is-hover-white" type="submit">Subscribe Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></button>
							</div>
							<div class="input-checkbox">
								<input id="agree" type="checkbox"> <label for="agree"><span class="check-mark"></span> I agree the policy</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="row justify-content-between row-gap-md-5 row-gap-4 p-b-80">
			<div class="col-xl-4 col-lg-8 col-md-7">
				<div class="footer-widget">
					<div class="about-widget">
						<div class="footer-logo">
							<a href="{{ route(('index5')) }}"><img alt="logo" src="{{ asset('assets/img/logo/logo-white.svg') }}"></a>
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
			<div class="col-xl-2 col-lg-4 col-md-5">
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
		<div class="footer-bottom-3">
			<div class="footer-bottom-layout-2">
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
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-41.webp') }}"></div>
	<div class="shape-2"><img alt="shape" src="{{ asset('assets/img/icons/icon-15.svg') }}"></div>
</footer>
<!-- footer-section end -->

@include('elements.script')

</body>
</html>
