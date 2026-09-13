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
							<img src="{{ asset('assets/img/icons/calendar-time.svg') }}" alt="icon"/>
							<span>Join Our Event (28 Nov, 2024) New Market, California.</span>
						</div>
						<a href="{{ route('donations') }}"class="e-primary-btn is-hover-white top-btn">Donate Now</a>
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
									<img src="{{ asset('assets/img/logo/logo.svg') }}" alt="logo"/>
								</a>
							</div>
							<nav class="main-menu d-none d-xl-block">
								<ul>
									<li class="has-dropdown">
										<a href="#">Home</a>
										<ul class="sub-menu">
											<li><a href="{{ route('index') }}">Home 01</a></li>
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
												<a href="{{ route(('volunteerDetails')) }}"
												>Volunteer Details</a
												>
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
								<a href="{{ route('services') }}" class="e-primary-btn has-icon">
									Explore More
									<span class="icon-wrap">
                        <span class="icon">
                          <i class="fa-regular fa-arrow-right"></i>
                          <i class="fa-regular fa-arrow-right"></i>
                        </span>
                      </span>
								</a>
							</div>
							<div
									class="header-bar open-sidebar d-none d-xl-flex"
									data-toggle="sidebar"
							>
								<div class="bar bar-1"></div>
								<div class="bar bar-2"></div>
								<div class="bar bar-3"></div>
							</div>
							<div
									class="header-bar open-mobile-menu d-xl-none"
									data-toggle="menubar"
							>
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
	<?php
		$title='Forest Cleaning';
		$subTitle='Forest Cleaning';
	?>
	<!-- breadcrumb-section start -->

	@include('elements.breadcrumb')
	<!-- breadcrumb-section end -->

	<!-- services-details-section start -->
	<section class="services-details-section-3 p-t-120">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
							<div class="detail-info-wrap m-b-60">
								<div class="thumb-wrap"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-127.webp') }}"></div>
								<div class="detail-info-contents">
									<div class="count-down-date m-b-20">
										<i class="fa-light fa-calendar-days"></i>
										<p>42 Days Left</p>
									</div>
									<div class="details-title m-b-15">
										<h2>Forest Cleaning</h2>
									</div>
									<div class="detail-text m-b-25">
										<p>
											Our Forest Cleaning campaign mobilizes volunteers and resources to remove litter, invasive species, and restore natural habitats. Every donation supports equipment, training, and outreach to protect local ecosystems and promote biodiversity.
										</p>
									</div>
									<div class="donation-wrap-3 m-b-30">
										<div class="left">
											<div class="d-top">
												<p>Donation Complete</p>
												<p>62%</p>
											</div>
											<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="62" class="progress" role="progressbar">
												<div class="progress-bar" style="width: 62%"></div>
											</div>
										</div>
									</div>
						<form action="{{ $camping ? route('donation.store', $camping) : '#' }}" method="POST" id="donation-form">
							@csrf

							@if (session('donation_success'))
								<div class="alert alert-success">{{ session('donation_success') }}</div>
							@endif
							@if ($errors->donation->any())
								<div class="alert alert-danger">
									<ul class="mb-0 ps-3">
										@foreach ($errors->donation->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<div class="make-donate m-b-30">
								<div class="details-subtitle m-b-20">
									<h4><span><img alt="icon" src="{{ asset('assets/img/icons/icon-4.svg') }}"></span> Your donation helps us</h4>
								</div>
								<div class="icon-wrap">
									<input class="selected-amount" name="amount" id="donation-amount" type="number" min="1000" step="1000"
										placeholder="0" value="{{ old('amount', 50000) }}" required>
								</div>
							</div>
							<div class="choose-currency-2 m-b-15">
								<p>Choose Amount (IDR):</p>
								<button class="amount" type="button" data-amount="50000">50rb</button>
								<button class="amount" type="button" data-amount="100000">100rb</button>
								<button class="amount" type="button" data-amount="250000">250rb</button>
								<button class="amount" type="button" data-amount="500000">500rb</button>
								<button class="amount" type="button" data-amount="1000000">1jt</button>
							</div>
							<div class="thank-you-text m-b-30">
								<p>&#10084;&#65039;Thank You For Donation !!</p>
							</div>
							<div class="payment-method-form">
								<div class="payment-title">
									<h3>Select Payment Method</h3>
								</div>
								<div class="select-payment-method">
									<div class="method">
										<input id="method-transfer" name="method" type="radio" value="Bank Transfer" checked>
										<label for="method-transfer">Bank Transfer</label>
									</div>
									<div class="method">
										<input id="method-ewallet" name="method" type="radio" value="E-Wallet">
										<label for="method-ewallet">E-Wallet</label>
									</div>
									<div class="method">
										<input id="method-offline" name="method" type="radio" value="Offline Donation">
										<label for="method-offline">Offline Donation</label>
									</div>
								</div>
								<h5>Personal Information:</h5>
								<div class="info-input m-b-20">
									<input class="form-control" name="name" placeholder="Your Name" type="text" value="{{ old('name') }}" required>
									<input class="form-control" name="email" placeholder="Email Address" type="email" value="{{ old('email') }}">
								</div>
								<div class="m-b-20">
									<input class="form-control" name="phone" placeholder="Phone Number" type="text" value="{{ old('phone') }}">
								</div>
								<div class="form-bottom">
									<button class="e-primary-btn has-icon" type="submit">Donate Now
										<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
									</button>
								</div>
								<div class="impact-text">
									<p><span>Direct Impact:</span> Your donations reach the most vulnerable communities around the world.</p>
								</div>
							</div>
						</form>
						@push('scripts')
							<script>
								document.querySelectorAll('.choose-currency-2 .amount').forEach(function (button) {
									button.addEventListener('click', function () {
										document.getElementById('donation-amount').value = this.dataset.amount;
									});
								});
							</script>
						@endpush
									</div>
								</div>
							</div>
							<div class="details-subtitle m-b-20">
								<h4>We can change the world together</h4>
							</div>
							<div class="detail-text m-b-30">
								<p>
									Together, we can create cleaner forests and healthier environments for wildlife and future generations. Your support helps us organize impactful events and educational programs.
								</p>
							</div>
							<div class="list-wrapper m-b-60">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Ecology is the study of the relationship between living organisms and their environment.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>In the long run, solar power is a sustainable solution for energy needs.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Focus on conservation priorities and community engagement.</p>
									</li>
								</ul>
							</div>
							<div class="divider-2"></div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3><img alt="icon" src="{{ asset('assets/img/icons/icon-19.svg') }}"> Diamond Sponsor</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="sponsor-info-wrap">
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-128.webp') }}"></div>
									<div>
										<div class="name">
											<h3>Michael Floyd</h3>
										</div>
										<div class="designation">
											<p>CO - FavDevs</p>
										</div><a class="view-profile-btn" href="{{ route('contact') }}"><span><i class="fa-brands fa-facebook-f"></i></span> View Profile</a>
									</div>
								</div>
							</div>
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3>Recent Course</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="recent-course-slider-active" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
									<div class="swiper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="camping-card-2 widget-style">
													<div class="thumb">
														<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-4.webp') }}"></a>
														<div class="date">
															<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
														</div>
													</div>
													<div class="content">
														<div class="donation-wrap">
															<div class="content-top">
																<div class="title">
																	<h3><a href="{{ route(('campingDetails')) }}">Reforestation and Tree Planting Campaign 2025</a></h3>
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
																<a class="e-primary-btn has-small has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="camping-card-2 widget-style">
													<div class="thumb">
														<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-3.webp') }}"></a>
														<div class="date">
															<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
														</div>
													</div>
													<div class="content">
														<div class="donation-wrap">
															<div class="content-top">
																<div class="title">
																	<h3><a href="{{ route(('campingDetails')) }}">Sustainable Energy for All: Why Your Donation Matters</a></h3>
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
																<a class="e-primary-btn has-small has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="camping-card-2 widget-style">
													<div class="thumb">
														<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-2.webp') }}"></a>
														<div class="date">
															<i class="fa-regular fa-clock"></i> <span>42 Days Left</span>
														</div>
													</div>
													<div class="content">
														<div class="donation-wrap">
															<div class="content-top">
																<div class="title">
																	<h3><a href="{{ route(('campingDetails')) }}">Protecting Endangered Species and Their Habitats</a></h3>
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
																<a class="e-primary-btn has-small has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="recent-course-pagination-wrap">
										<div class="recent-course-pagination"></div>
									</div>
								</div>
							</div>
							<div class="s-widget-wrap m-b-30">
								<div class="detail-contact text-center">
									<div class="thumb"><img alt="shape" src="{{ asset('assets/img/shapes/shape-47.webp') }}"></div>
									<div class="icon-info-wrap">
										<div class="icon-wrap">
											<div class="icon"><img alt="icon" src="{{ asset('assets/img/icons/icon-18.svg') }}"></div>
											<div class="bar-wrap">
												<div class="bar-1"></div>
												<div class="bar-2"></div>
											</div>
										</div>
										<div class="info">
											<h3><a href="tel:+70264566579">+70 264 566 579</a></h3>
											<p>Need Help?</p>
										</div>
									</div>
								</div>
							</div>
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3>Our Gallery</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="sidebar-gallery">
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-134.webp') }}"></div>
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-131.webp') }}"></div>
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-132.webp') }}"></div>
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-133.webp') }}"></div>
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-130.webp') }}"></div>
									<div class="thumb"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-129.webp') }}"></div>
								</div>
							</div>
							<div class="s-widget-wrap">
								<div class="w-title">
									<h3>Share With Everyone</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="socials">
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- services-details-section end -->

	<!-- our-camping start -->
	<section class="services-details-section-4 p-b-130 p-t-60 p-b-xs-80">
		<div class="container">
			<div class="row m-b-50 m-b-xs-40">
				<div class="col-xl-12">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Camping</span>
					</div>
					<div class="common-title m-b-0 text-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
						<h2>Your Gift For a Greener Tomorrow</h2>
					</div>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-4 col-md-6">
					<div class="camping-card">
						<div class="thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-2.webp') }}"></a>
							<div class="category">
								<a href="{{ route(('campingDetails')) }}">Animal</a>
							</div>
						</div>
						<div class="content">
							<div class="content-top">
								<div class="date">
									<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar.svg') }}"> <span>29 Days Left</span>
								</div>
								<div class="title">
									<h3><a href="{{ route(('campingDetails')) }}">Sustainable Energy for All: Why Your Donation Matters</a></h3>
								</div>
								<div class="text">
									<p>Excepteur occaecat cupidatat officia the implant fixture is first placed.</p>
								</div>
							</div>
							<div class="donation-wrap">
								<div class="d-top">
									<p>Donation Complete</p>
									<p>72%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 75%"></div>
								</div>
								<div class="fund">
									<p>Raised: <span>$9,650</span></p>
									<p>Goal: <span>$16,560</span></p>
								</div>
								<div class="d-bottom">
									<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a> <button class="d-wishlist"><i class="fa-regular fa-heart"></i> <span>259</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="camping-card">
						<div class="thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-3.webp') }}"></a>
							<div class="category">
								<a href="{{ route(('campingDetails')) }}">Plantation</a>
							</div>
						</div>
						<div class="content">
							<div class="content-top">
								<div class="date">
									<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar.svg') }}"> <span>29 Days Left</span>
								</div>
								<div class="title">
									<h3><a href="{{ route(('campingDetails')) }}">Reforestation and Tree Planting Campaign 2025</a></h3>
								</div>
								<div class="text">
									<p>Excepteur occaecat cupidatat officia the implant fixture is first placed.</p>
								</div>
							</div>
							<div class="donation-wrap">
								<div class="d-top">
									<p>Donation Complete</p>
									<p>64%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="64" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 64%"></div>
								</div>
								<div class="fund">
									<p>Raised: <span>$6,650</span></p>
									<p>Goal: <span>$10,560</span></p>
								</div>
								<div class="d-bottom">
									<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a> <button class="d-wishlist"><i class="fa-regular fa-heart"></i> <span>259</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="camping-card">
						<div class="thumb">
							<a href="{{ route(('campingDetails')) }}"><img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-4.webp') }}"></a>
							<div class="category">
								<a href="{{ route(('campingDetails')) }}">Animal</a>
							</div>
						</div>
						<div class="content">
							<div class="content-top">
								<div class="date">
									<img alt="calendar-icon" src="{{ asset('assets/img/icons/calendar.svg') }}"> <span>29 Days Left</span>
								</div>
								<div class="title">
									<h3><a href="{{ route(('campingDetails')) }}">Protecting Endangered Species and Their Habitats</a></h3>
								</div>
								<div class="text">
									<p>Excepteur occaecat cupidatat officia the implant fixture is first placed.</p>
								</div>
							</div>
							<div class="donation-wrap">
								<div class="d-top">
									<p>Donation Complete</p>
									<p>89%</p>
								</div>
								<div aria-label="Basic example" aria-valuemax="100" aria-valuemin="0" aria-valuenow="89" class="progress" role="progressbar">
									<div class="progress-bar" style="width: 89%"></div>
								</div>
								<div class="fund">
									<p>Raised: <span>$13,650</span></p>
									<p>Goal: <span>$16,560</span></p>
								</div>
								<div class="d-bottom">
									<a class="e-primary-btn has-icon d-btn" href="{{ route('donations') }}">Donate Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a> <button class="d-wishlist"><i class="fa-regular fa-heart"></i> <span>259</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our-camping end -->

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
