<!DOCTYPE html>
<html lang="en">

    @include('elements.head')

<body>
<!-- preloader start-->
@include('elements.preloader')
<!-- preloader end  -->

<!-- header-section start -->
<header class="header-section-4">
	<div class="top-bar d-none d-md-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12">
					<div class="top-bar-content text-center">
						<div class="text-wrap">
							<img src="{{ asset('assets/img/icons/calendar-time.svg') }}" alt="icon"/>
							<span>Join Our Event (28 Nov, 2026) New Market, California.</span>
						</div>
						<a href="{{ route('donations') }}" class="e-primary-btn is-hover-white top-btn top-btn-2">
							Join Event
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="header-bottom-layout">
						<div class="header-left-2">
							<div class="logo-wrap">
								<a href="#">
									<img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo"/>
								</a>
							</div>
							<div class="header-divider-bar d-none d-xxl-block"></div>
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
								<div class="header-info-icon-2">
									<i class="fa-regular fa-phone-volume"></i>
								</div>
								<div class="header-info-content">
									<span>Call Us Today!</span>
									<p><a href="tel:+1629555-0129">+1 (629) 555-0129</a></p>
								</div>
							</div>
							<div class="header-btn-wrap d-none d-xl-flex">
								<a href="{{ route('contact') }}" class="e-primary-btn has-icon">
									Contact Us
									<span class="icon-wrap">
										<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                    </span>
								</a>
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
	<!-- hero-section-4 start -->
	<section class="hero-section-4 overflow-hidden" style="background-image: url(assets/img/bg/hero-bg-4.webp)">
		<div class="hero-slider-social">
			<div class="social-links">
				<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6">
					<div class="hero-content-4">
						<div class="subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Eco-friendly designs</span>
						</div>
						<div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h1>From Waste to Wonder: The Power of Recycling</h1>
						</div>
						<div class="text" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
							<p>As the world faces increasing environmental challenges, the need for sustainable and eco-friendly solutions.</p>
						</div>
						<div class="hero-rating-wrap" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
							<a class="e-primary-btn has-icon" href="{{ route('about') }}">Discover More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							<div class="rating-wrap">
								<div class="star-rating">
									<img alt="logo" src="{{ asset('assets/img/logo/logo-8.svg') }}">
									<div class="stars">
										<i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i> <i class="fa-solid fa-star-sharp"></i>
									</div>
								</div>
								<p>Excellent 4.9 out of 5</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-85.webp') }}"></div>
	</section>
	<!-- hero-section-4 end -->

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

	<!-- about-us-section-2 start -->
	<section class="about-us-section-2 p-t-100 p-t-xs-80">
		<div class="container">
			<div class="section-top-5">
				<div class="left">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>About Us</span>
					</div>
					<div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>We have worked for you since 1989. recycle the world</h2>
					</div>
				</div>
				<div class="right" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<h6>Welcome to Econest, A leading Recycling Innovator With a Rich History of Excellence.</h6>
					<p>The implant fixture is first placed, so that it ilikely to then dental prosthetic is added then dental prosthetic.</p><a class="e-primary-btn has-icon" href="{{ route('services') }}">Explore More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div>
			<div class="thumb">
				<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-86.webp') }}">
				<div class="company-achievements-2">
					<div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<i class="fa-light fa-chart-mixed"></i>
						<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%</h2>
						<p>Company Success</p>
					</div>
					<div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<i class="fa-light fa-lightbulb-exclamation-on"></i>
						<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="565">0</span>+</h2>
						<p>Company Strategies</p>
					</div>
					<div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<i class="fa-light fa-thumbs-up"></i>
						<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="36">0</span>k</h2>
						<p>Complete Projects</p>
					</div>
					<div class="achievement" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<i class="fa-light fa-users-medical"></i>
						<h2><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="100">0</span>+</h2>
						<p>Experienced Members</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about-us-section-2 end -->

	<!-- services-we-offer-section start -->
	<section class="services-we-offer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80" style="background-image: url('assets/img/bg/services-we-offer-bg.webp')">
		<div class="container">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon" src="{{ asset('assets/img/icons/icon-1.svg') }}"> <span>What We’re Doing</span>
				</div>
				<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Services We Offer</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="service-slider-active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="service-card-3">
										<div class="thumb">
											<a href="{{ route(('servicesDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-87.webp') }}"></a>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('servicesDetails')) }}">Cupboard/Paper Recycling</a></h3>
													</div>
													<div class="text">
														<p>Energy consulting involves providing of advice and guidance on energy</p>
													</div>
												</div><a class="e-primary-btn has-icon d-btn" href="{{ route(('servicesDetails')) }}">View Details <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
											</div>
										</div>
										<div class="card-number-2">
											<h1>01</h1>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-card-3">
										<div class="thumb">
											<a href="{{ route(('servicesDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-88.webp') }}"></a>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('servicesDetails')) }}">Plastic Recycling</a></h3>
													</div>
													<div class="text">
														<p>Energy consulting involves providing of advice and guidance on energy</p>
													</div>
												</div><a class="e-primary-btn has-icon d-btn" href="{{ route(('servicesDetails')) }}">View Details <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
											</div>
										</div>
										<div class="card-number-2">
											<h1>02</h1>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-card-3">
										<div class="thumb">
											<a href="{{ route(('servicesDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-89.webp') }}"></a>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('servicesDetails')) }}">Glass Recycling</a></h3>
													</div>
													<div class="text">
														<p>Energy consulting involves providing of advice and guidance on energy</p>
													</div>
												</div><a class="e-primary-btn has-icon d-btn" href="{{ route(('servicesDetails')) }}">View Details <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
											</div>
										</div>
										<div class="card-number-2">
											<h1>03</h1>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="service-card-3">
										<div class="thumb">
											<a href="#"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-88.webp') }}"></a>
										</div>
										<div class="content">
											<div class="donation-wrap">
												<div class="content-top">
													<div class="title">
														<h3><a href="{{ route(('servicesDetails')) }}">Plastic Recycling</a></h3>
													</div>
													<div class="text">
														<p>Energy consulting involves providing of advice and guidance on energy</p>
													</div>
												</div><a class="e-primary-btn has-icon d-btn" href="{{ route(('servicesDetails')) }}">View Details <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
											</div>
										</div>
										<div class="card-number-2">
											<h1>04</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="service-pagination-wrap">
							<div class="service-pagination"></div>
						</div>
						<div class="service-button-prev">
							<i class="fa-regular fa-arrow-left"></i>
						</div>
						<div class="service-button-next">
							<i class="fa-regular fa-arrow-right"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- services-we-offer-section end -->

	<!-- work-process start -->
	<section class="work-process p-t-100 p-b-120 p-b-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Work Process</span>
				</div>
				<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Simple Steps Wastage to Recycling Item Processing</h2>
				</div>
			</div>
			<div class="row row-gap-4 row-gap-md-5">
				<div class="col-xl-7">
					<div class="work-process-cards" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="work-process-card">
							<div class="card-top">
								<img alt="shape" src="{{ asset('assets/img/shapes/shape-37.webp') }}">
								<div class="number">
									<h4>01</h4>
								</div>
							</div>
							<div class="card-content">
								<h4>Collection</h4>
								<h4>and Segregation</h4>
								<p>Separate into categories: organic, plastic, metal, paper, glass, and e-waste.</p>
							</div>
						</div>
						<div class="work-process-card">
							<div class="card-top">
								<img alt="shape" src="{{ asset('assets/img/shapes/shape-37.webp') }}">
								<div class="number">
									<h4>02</h4>
								</div>
							</div>
							<div class="card-content">
								<h4>Cleaning</h4>
								<h4>and Sorting</h4>
								<p>Wash and remove contaminants from recyclable materials.</p>
							</div>
						</div>
						<div class="work-process-card">
							<div class="card-top">
								<img alt="shape" src="{{ asset('assets/img/shapes/shape-37.webp') }}">
								<div class="number">
									<h4>03</h4>
								</div>
							</div>
							<div class="card-content">
								<h4>Reformation</h4>
								<h4>& Manufacturing</h4>
								<p>Convert processed materials into raw forms like pellets, sheets, or fibers.</p>
							</div>
						</div>
						<div class="work-process-card">
							<div class="card-top">
								<img alt="shape" src="{{ asset('assets/img/shapes/shape-37.webp') }}">
								<div class="number">
									<h4>04</h4>
								</div>
							</div>
							<div class="card-content">
								<h4>Reuse</h4>
								<h4>& Distribution</h4>
								<p>Promote products made from recycled materials to encourage sustainability.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5">
					<div class="contact-form-3" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<div class="form-content">
							<h3>Have you any questions?😍</h3>
							<p>The point of using lorem ipsum is that it has more-or-less packages normal</p>
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
								</div><button class="e-primary-btn has-icon is-hover-white" type="submit">Submit Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></button>
							</form><img alt="shape-5" src="{{ asset('assets/img/shapes/shape-5.webp') }}"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- work-process end -->

	<!-- our-events-section-3 start -->
	<section class="our-events-section-2 p-t-120 p-b-120 p-t-md-100 p-b-md-100 p-t-xs-80 p-b-xs-80">
		<div class="container">
			<div class="section-top-6">
				<div class="left">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Recent Projects</span>
					</div>
					<div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>Smart Waste to Recycling Solution</h2>
					</div>
				</div>
				<div class="right text-end" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<a class="e-primary-btn has-icon" href="{{ route('project') }}">View All Projects <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div>
			<div class="row event-card-3 m-b-30" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-lg-6 adjusted-col-gap">
					<div class="event-thumb">
						<a href="{{ route(('projectDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-90.webp') }}"></a>
					</div>
				</div>
				<div class="col-lg-6 adjusted-col-gap">
					<div class="card-content">
						<div class="category">
							<p>Commercial</p>
						</div>
						<div class="event-card-title">
							<h2><a href="{{ route(('projectDetails')) }}">Smart Waste Collection: Sorting for a Greener Future</a></h2>
						</div>
						<div class="event-card-text">
							<p>Recycling is a simple yet powerful way to reduce waste and protect the environment. Our process ensures that waste is collected.</p>
						</div>
						<div class="join-event">
							<div class="blog-btn">
								<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-number-3">
					<h1>01</h1>
				</div>
			</div>
			<div class="row event-card-3 m-b-30" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
				<div class="col-lg-6 adjusted-col-gap">
					<div class="event-thumb">
						<a href="{{ route(('projectDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-91.webp') }}"></a>
					</div>
				</div>
				<div class="col-lg-6 adjusted-col-gap">
					<div class="card-content">
						<div class="category">
							<p>Residential</p>
						</div>
						<div class="event-card-title">
							<h2><a href="{{ route(('projectDetails')) }}">From Trash to Treasure: Proper Waste Segregation</a></h2>
						</div>
						<div class="event-card-text">
							<p>The first step in recycling is proper waste collection and segregation. We categorize waste into organic, plastic, paper, glass</p>
						</div>
						<div class="join-event">
							<div class="blog-btn">
								<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-number-3">
					<h1>02</h1>
				</div>
			</div>
			<div class="row event-card-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
				<div class="col-lg-6 adjusted-col-gap">
					<div class="event-thumb">
						<a href="{{ route(('projectDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-92.webp') }}"></a>
					</div>
				</div>
				<div class="col-lg-6 adjusted-col-gap">
					<div class="card-content">
						<div class="category">
							<p>Commercial</p>
						</div>
						<div class="event-card-title">
							<h2><a href="{{ route(('projectDetails')) }}">Rebirth of Materials: From Waste to New Products</a></h2>
						</div>
						<div class="event-card-text">
							<p>Every recycled product reduces the demand for virgin materials and lowers environmental impact.</p>
						</div>
						<div class="join-event">
							<div class="blog-btn">
								<a class="e-primary-btn has-icon" href="{{ route(('projectDetails')) }}">Explore Project <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-number-3">
					<h1>03</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- our-events-section-3 end -->

	<!-- volunteer-section start -->
	<section class="volunteer-section p-t-100 p-b-100 p-t-xs-80 p-b-xs-80">
		<div class="container text-center">
			<div class="text-center m-b-50 m-b-xs-40">
				<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>We Are Volunteer</span>
				</div>
				<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<h2>Together For The Planet</h2>
				</div>
			</div>
			<div class="row row-gap-4 p-b-60" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb"><img alt="thumb-17" src="{{ asset('assets/img/thumbs/thumb-17.webp') }}"></div>
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
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb"><img alt="thumb-18" src="{{ asset('assets/img/thumbs/thumb-18.webp') }}"></div>
							<div class="author-info">
								<h5>John Maxwell</h5>
								<p>Team Leader</p>
							</div></a>
						<div class="socials">
							<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
							<div class="social-links">
								<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb"><img alt="thumb-19" src="{{ asset('assets/img/thumbs/thumb-19.webp') }}"></div>
							<div class="author-info">
								<h5>Bm Ashik (Moni)</h5>
								<p>Sr. Volunteer</p>
							</div></a>
						<div class="socials">
							<button class="share-button"><i class="fa-light fa-share-nodes"></i></button>
							<div class="social-links">
								<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6">
					<div class="volunteer-card">
						<a href="{{ route(('volunteerDetails')) }}">
							<div class="thumb"><img alt="thumb-20" src="{{ asset('assets/img/thumbs/thumb-20.webp') }}"></div>
							<div class="author-info">
								<h5>Denial Pasha</h5>
								<p>Volunteer</p>
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
	<!-- volunteer-section end -->

	<!-- dust-recycling-section start -->
	<section class="dust-recycling-section" style="background-image: url(assets/img/bg/dust-recycling-bg-2.webp)">
		<div class="container">
			<div class="row justify-content-center align-items-xl-start align-items-center">
				<div class="col-lg-10 col-12 order-2 order-lg-1">
					<div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="dust-recycle-top">
							<h5>Why Choose ‘Econest’</h5>
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
									<p>Recycling Service</p>
									<p>96%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="96" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 96%"></div>
								</div>
							</div>
							<div class="campaigns">
								<div class="top">
									<p>Waste Management</p>
									<p>92%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 92%"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 order-1 order-lg-2 m-b-md-60 m-b-xs-60">
					<div class="btn-layer-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- dust-recycling-section end -->

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
							<p>Llikely to then a dental prosthetic is added then dental prosthetic occaecat laborum.</p>
						</div>
						<div class="reviews">
							<h3><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="99">0</span>%</h3><img alt="favicon" src="{{ asset('assets/img/logo/favicon.webp') }}">
							<h5>Positive Reviews</h5>
						</div><a class="review-btn" href="{{ route('contact') }}"><img alt="icon" src="{{ asset('assets/img/icons/icon-3.svg') }}"> <span><span>Write your honest review</span> <i class="fa-solid fa-arrow-right-long"></i></span></a>
					</div>
				</div>
				<div class="col-xl-8">
					<div class="testimonial-slider-active" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<div class="swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="testimonial-card">
										<div class="thumb">
											<img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.webp') }}"> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
										</div>
										<div class="card-content">
											<div class="rating">
												<p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
											</div>
											<div class="review">
												<p>I was very impressed 😍 involves providing of advice and guidance on energy-related for matters. Understand the advantages hiring professionals to design and maintain your garden. 🙋</p>
											</div>
											<div class="author-details">
												<h5>Penelope Miller <span>(Arjun)</span></h5>
												<h6>Sr. Volunteer</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-card">
										<div class="thumb">
											<img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.2.webp') }}"> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
										</div>
										<div class="card-content">
											<div class="rating">
												<p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
											</div>
											<div class="review">
												<p>I was very impressed 😍 involves providing of advice and guidance on energy-related for matters. Understand the advantages hiring professionals to design and maintain your garden. 🙋</p>
											</div>
											<div class="author-details">
												<h5>Penelope Miller <span>(Arjun)</span></h5>
												<h6>Sr. Volunteer</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-card">
										<div class="thumb">
											<img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.3.webp') }}"> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
										</div>
										<div class="card-content">
											<div class="rating">
												<p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
											</div>
											<div class="review">
												<p>I was very impressed 😍 involves providing of advice and guidance on energy-related for matters. Understand the advantages hiring professionals to design and maintain your garden. 🙋</p>
											</div>
											<div class="author-details">
												<h5>Penelope Miller <span>(Arjun)</span></h5>
												<h6>Sr. Volunteer</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<div class="testimonial-card">
										<div class="thumb">
											<img alt="thumb-10" src="{{ asset('assets/img/thumbs/thumb-10.2.webp') }}"> <a class="video-play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&ab_channel=Motiversity">Play</a>
										</div>
										<div class="card-content">
											<div class="rating">
												<p>Rating</p><i class="fa-solid fa-star-sharp"></i> <span>5.0</span>
											</div>
											<div class="review">
												<p>I was very impressed 😍 involves providing of advice and guidance on energy-related for matters. Understand the advantages hiring professionals to design and maintain your garden. 🙋</p>
											</div>
											<div class="author-details">
												<h5>Penelope Miller <span>(Arjun)</span></h5>
												<h6>Sr. Volunteer</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- testimonial end -->

	<!-- major-partners start -->
	<section class="major-partners p-t-80 p-b-120 p-b-md-100 p-b-xs-80">
		<div class="container">
			<div class="partners-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				<div class="line-right"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
				<h3>Major Partners</h3>
				<div class="line"><img alt="shape-4" src="{{ asset('assets/img/shapes/shape-4.webp') }}"></div>
			</div>
			<div class="row p-t-60">
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
		</div>
	</section>
	<!-- major-partners end -->

	<!-- latest-blog-section-2 start -->
	<section class="latest-blog-section-2 p-b-100 p-b-xs-80">
		<div class="container">
			<div class="section-top-4">
				<div class="left">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>News & Blog</span>
					</div>
					<div class="common-title text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>Check Latest Blog Post</h2>
					</div>
				</div>
				<div class="right text-end" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
					<a class="e-primary-btn has-icon" href="{{ route(('blogGrid')) }}">Read All Posts <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
				<div class="col-xl-4 col-md-6">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-93.webp') }}"></a>
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
										<i class="fa-light fa-bookmark"></i> <span>Plastic</span>
									</div>
								</div>
								<div class="title">
									<h3><a href="{{ route(('blogDetails')) }}">The Power of One: How Individual Actions Save the Planet</a></h3>
								</div>
							</div>
							<div class="content-bottom">
								<a class="e-primary-btn has-icon has-small read-more-btn" href="{{ route(('blogDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-94.webp') }}"></a>
							<div class="event-date">
								<h2>20</h2>
								<h5>Feb</h5>
							</div>
						</div>
						<div class="content">
							<div class="content-top p-0 m-b-20">
								<div class="author">
									<div class="admin">
										<i class="fa-light fa-circle-user"></i> <span>Admin</span>
									</div>
									<div class="solar">
										<i class="fa-light fa-bookmark"></i> <span>Cupboard</span>
									</div>
								</div>
								<div class="title">
									<h3><a href="{{ route(('blogDetails')) }}">Sustainable Energy for All: Why Your Donation Matters</a></h3>
								</div>
							</div>
							<div class="content-bottom">
								<a class="e-primary-btn has-icon has-small read-more-btn" href="{{ route(('blogDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="blog-card-2">
						<div class="thumb">
							<a href="{{ route(('blogDetails')) }}"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-95.webp') }}"></a>
							<div class="event-date">
								<h2>14</h2>
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
										<i class="fa-light fa-bookmark"></i> <span>Glass</span>
									</div>
								</div>
								<div class="title">
									<h3><a href="{{ route(('blogDetails')) }}">Water Conservation: Small Changes, Big Impact</a></h3>
								</div>
							</div>
							<div class="content-bottom">
								<a class="e-primary-btn has-icon has-small read-more-btn" href="{{ route(('blogDetails')) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
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
<footer class="footer-section p-t-125" style="background-image: url(assets/img/bg/footer-bg.webp)">
	<div class="container">
		<div class="row justify-content-between row-gap-md-5 row-gap-4 p-b-30">
			<div class="col-xl-4 col-lg-8 col-md-7">
				<div class="footer-widget">
					<div class="about-widget">
						<div class="footer-logo">
							<a href="{{ route(('index4')) }}"><img alt="logo" src="{{ asset('assets/img/logo/logo-white.svg') }}"></a>
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
					<h3 class="w-title">Quick Links</h3>
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
					<h3 class="w-title">Our Services</h3>
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
					<h3 class="w-title">Newsletter</h3>
					<div class="subscribe-form">
						<form action="#">
							<div class="input-wrap">
								<input placeholder="ashikulislambsl@gmail.com" type="text">
							</div>
							<div class="input-button">
								<button class="e-primary-btn has-icon is-hover-white" type="submit">Subscribe Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></button>
							</div>
							<div class="input-checkbox">
								<input id="agree" type="checkbox"> <label for="agree"><span class="check-mark"></span> I agree the policy</label>
							</div>
						</form>
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
</footer>
<!-- footer-section end -->

@include('elements.script')

</body>
</html>
