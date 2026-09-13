@extends('layout.layout')

@php
    $title='About Us';
    $subTitle='Who We Are';
@endphp

@section('content')

		<!-- why-us-section start -->
		<section class="why-us-section-6 p-t-100 p-t-xs-80" style="
            background-image: url(assets/img/template/stay.png);">
			<div class="container">
				<div class="row align-items-center p-b-80">
					<div class="col-xl-6">
						<div class="thumb px-lg-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							<div class="thumb-1">
								<img src="{{ asset('assets/img/template/stay1.png') }}" alt="thumb-1"/>
								<div class="s-shape">
									<img src="{{ asset('assets/img/shapes/shape-14.webp') }}" alt="shape-1"/>
								</div>
							</div>
							<div class="thumb-2">
								<img src="{{ asset('assets/img/template/stay2.png') }}" alt="thumb-2"/>
							</div>
							<div class="thumb-3">
								<div class="shape-wrapped-thumb">
									<img src="{{ asset('assets/img/template/stay3.png') }}" alt="thumb-3"/>
									<div class="experience-shape">
										<h3>
                                            <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="2">0</span>+
										</h3>
										<p>Years of experience</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="why-us-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
							<div class="common-subtitle">
								<img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-2"/>
								<span>Why Stay With Us</span>
							</div>
							<div class="common-title text-start">
								<h2>Reasons to Choose Coasterra</h2>
							</div>
							<div class="text">
								<p>
									We combine science, ecosystems, and community collaboration to build resilient 
									coastlines and create measurable environmental and social impact
								</p>
							</div>
							<div class="services">
								<div class="service-left">
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Community Empowerment</p>
									</div>
									<div class="service">
										<i class="fa-solid fa-check"></i>
										<p>Climate Solutions</p>
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
								<div class="blog-btn">
									<a href="{{ route('project') }}" class="e-primary-btn has-icon">
										Explore More
										<span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
									</a>
								</div>
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
									<p>Excellent 4.9 out of 5</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- company-achievements start -->
				<div class="company-achievements p-b-100 p-b-xs-80" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
					<div class="achievement achievement-2">
						<i class="fa-light fa-chart-mixed"></i>
						<h2>
                            <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="98">0</span>%
						</h2>
						<p>Company Success</p>
					</div>
					<div class="achievement achievement-2">
						<i class="fa-light fa-lightbulb-exclamation-on"></i>
						<h2>
                            <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="10">0</span>+
						</h2>
						<p>Company Strategies</p>
					</div>
					<div class="achievement achievement-2">
						<i class="fa-light fa-thumbs-up"></i>
						<h2>
                            <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="3">0</span>+
						</h2>
						<p>Company Services</p>
					</div>
					<div class="achievement achievement-2">
						<i class="fa-light fa-users-medical"></i>
						<h2>
                            <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="15">0</span>+
						</h2>
						<p>Team Members</p>
					</div>
				</div>
				<!-- company-achievements end -->
			</div>
		</section>
		<!-- why-us-section end -->
	</div>

	<!-- about-us-section-3 start -->
	<section class="about-us-section-3" style="
          background-image: url(assets/img/template/why-us-bg.webp),
            url(assets/img/template/who-we-are-bg.webp);
        ">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-xl-6 adjusted-margin">
					<div class="about-us-content adjusted-padding" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div class="common-subtitle">
							<img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-2"/>
							<span>Our History</span>
						</div>
						<div class="common-title text-start">
							<h2>The Begin of Our Journey</h2>
						</div>
						<div class="c-tabs-wrapper">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="c-tab-1" data-bs-toggle="tab" data-bs-target="#c-tab-1-pane" type="button" role="tab" aria-controls="c-tab-1-pane" aria-selected="true">
										2026
									</button>
								</li>
								<!-- <li class="nav-item" role="presentation">
									<button class="nav-link" id="c-tab-2" data-bs-toggle="tab" data-bs-target="#c-tab-2-pane" type="button" role="tab" aria-controls="c-tab-2-pane" aria-selected="false">
										2021
									</button>
								</li> -->
							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="c-tab-1-pane" role="tabpanel" aria-labelledby="c-tab-1" tabindex="0">
									<div class="tab-content">
										<div class="year">
											<h6>Year 2026</h6>
										</div>
										<div class="reward">
											<h5>Coasterra Is Officially Established</h5>
										</div>
										<div class="text">
											<p>
												Coasterra was founded in 2026 as a coastal climate solutions venture, connecting science, communities, government, and industry to deliver nature-based solutions for Indonesia’s coastal regions.
											</p>
										</div>
										<div class="annual-donation-wrap">
											<a href="{{ route('project') }}" class="e-primary-btn has-icon">
												Explore Our Programs
												<span class="icon-wrap">
                                                    <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                                </span>
											</a>
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
	<!-- about-us-section-3 end -->

	<!-- volunteer-section start -->
	<section class="volunteer-section p-t-120 p-b-120 p-t-xs-80 p-b-xs-80" style="background-color: #f8f7f0">
		<div class="container">
			<div class="section-top-13">
				<div class="left">
					<div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-2"/>
						<span>We Are Volunteer</span>
					</div>
					<div class="common-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<h2>Together For The Nature</h2>
					</div>
				</div>
				<div class="right">
					<div class="contact-details" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						<div class="details-btn">
							<a href="{{ route('volunteer') }}" class="e-primary-btn has-icon">
								View All Volunteer
								<span class="icon-wrap">
									<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                </span>
							</a>
						</div>
						<div class="join-us-btn">
							<img src="{{ asset('assets/img/shapes/shape-12.webp') }}" alt="shape-12"/>
							<a href="{{ route(('beVolunteer')) }}" class="review-btn">
								<span>If you want can join us</span>
								<i class="fa-solid fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row row-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
				@forelse ($volunteers as $volunteer)
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="volunteer-card-4">
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
					<div class="col-12 text-center">
						<p>No volunteers listed yet.</p>
					</div>
				@endforelse
			</div>
		</div>
	</section>
	<!-- volunteer-section end -->

	<!-- testimonial start -->
	<section class="testimonial p-t-120 p-t-xs-80">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-xl-4 m-b-lg-60 m-b-md-60 m-b-xs-60">
					<div class="testimonial-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div class="common-subtitle">
							<img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-2"/>
							<span>Testimonials</span>
						</div>
						<div class="common-title text-start">
							<h2>
								Why They Believe <span><i class="fa-solid fa-quote-right"></i> In Us</span>
							</h2>
						</div>
						<div class="text">
							<p>
								Be part of our journey by sharing your experience with Coasterra.
							</p>
						</div>
						<div class="reviews">
							<h3>
                                <span class="purecounter" data-purecounter-duration="2" data-purecounter-end="99">0</span>%
							</h3>
							<img src="{{ asset('assets/img/logo/favicon.webp') }}" alt="favicon"/>
							<h5>Positive Reviews</h5>
						</div>
						<a href="{{ route('contact') }}" class="review-btn">
							<img src="{{ asset('assets/img/icons/icon-3.svg') }}" alt="icon"/>
							<span><span>Write your honest review</span><i class="fa-solid fa-arrow-right-long"></i></span>
						</a>
					</div>
				</div>
				<div class="col-xl-8">
					<div class="testimonial-slider-active" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<div class="swiper">
							<div class="swiper-wrapper">
							@forelse ($testimonis as $testimoni)
								<div class="swiper-slide">
									<div class="testimonial-card">
										<div class="thumb">
											<img alt="{{ $testimoni->name }}"
												src="{{ $testimoni->image ? Storage::url($testimoni->image) : asset('assets/img/thumbs/thumb-testi.svg') }}">
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
	<section class="major-partners p-t-80 p-b-140 p-b-xs-80">
		<div class="container">
			<div class="partners-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
				<div class="line-right">
					<img src="{{ asset('assets/img/shapes/shape-4.webp') }}" alt="shape-4"/>
				</div>
				<h3>Major Partners</h3>
				<div class="line">
					<img src="{{ asset('assets/img/shapes/shape-4.webp') }}" alt="shape-4"/>
				</div>
			</div>
			<div class="row p-t-60 p-b-60" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
				<div class="col-xl-12">
					<div class="partner-marquee">
						@include('elements.partner-marquee')
					</div>
				</div>
			</div>
			<div class="partner-btn text-center">
				<a href="{{ route('contact') }}" class="e-primary-btn has-icon" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
					Become a Partner
					<span class="icon-wrap">
						<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                    </span>
				</a>
			</div>
		</div>
	</section>
	<!-- major-partners end -->

	<!-- our-events-section-2 start -->
	<section class="our-events-section-2 p-t-120 p-b-120 p-t-xs-80 p-b-xs-80 m-b-100">
		<div class="container">
			<div class="row align-items-end m-b-60 m-b-xs-40">
				<div class="col-xl-6 col-md-8 m-b-xs-20">
					<div class="common-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<img src="{{ asset('assets/img/icons/icon-2.svg') }}" alt="icon-1"/>
						<span>Our Arrange</span>
					</div>
					<div class="common-title m-b-0 style-color-3 text-start" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
						<h2>Coasterra Upcoming Events</h2>
					</div>
				</div>
				<div class="col-xl-6 col-md-4 text-md-end">
					<a href="{{ route('camping') }}" class="e-primary-btn has-icon" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						View All Events
						<span class="icon-wrap">
							<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                        </span>
					</a>
				</div>
			</div>
			<div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
				<div class="col-xl-12">
					<div class="event-card-2 m-b-30">
						<div class="event-thumb">
							<a href="{{ route(('campingDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-event-1.svg') }}" alt="thumb-1"/>
							</a>
							<div class="event-date">
								<h5>August 30, 2026</h5>
							</div>
						</div>
						<div class="card-content">
							<div class="event-card-title">
								<h2>
									<a href="{{ route(('campingDetails')) }}">
										Mangrove Planting Day
									</a>
								</h2>
							</div>
							<div class="address">
								<div class="time">
									<i class="fa-regular fa-clock"></i>
									<span>08:30 WIB - 16:00 WIB</span>
								</div>
								<div class="location">
									<i class="fa-regular fa-location-dot"></i>
									<span>Pulau Kelapa, Kepulauan Seribu</span>
								</div>
							</div>
							<div class="join-event">
								<div class="blog-btn">
									<a href="{{ route(('campingDetails')) }}" class="e-primary-btn has-icon">
										Join Event
										<span class="icon-wrap">
											<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
									</a>
								</div>
								<div class="top-right">
									<img src="{{ asset('assets/img/authors/author-1.svg') }}" alt="authors"/>
									<div class="people-joined">
										<h5>236</h5>
										<span>Joined People</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="event-card-2">
						<div class="event-thumb">
							<a href="{{ route(('campingDetails')) }}">
								<img src="{{ asset('assets/img/thumbs/thumb-event-2.svg') }}" alt="thumb-2"/>
							</a>
							<div class="event-date">
								<h5>September 14, 2026</h5>
							</div>
						</div>
						<div class="card-content">
							<div class="event-card-title">
								<h2>
									<a href="{{ route(('campingDetails')) }}">
										Coastal Clean-Up & Education
									</a>
								</h2>
							</div>
							<div class="address">
								<div class="time">
									<i class="fa-regular fa-clock"></i>
									<span>09:00 WIB - 12:00 WIB</span>
								</div>
								<div class="location">
									<i class="fa-regular fa-location-dot"></i>
									<span>Pulau Kelapa, Kepulauan Seribu</span>
								</div>
							</div>
							<div class="join-event">
								<div class="blog-btn">
									<a href="{{ route(('campingDetails')) }}" class="e-primary-btn has-icon">
										Join Event
										<span class="icon-wrap">
                                            <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                        </span>
									</a>
								</div>
								<div class="top-right">
									<img src="{{ asset('assets/img/authors/author-1.svg') }}" alt="authors"/>
									<div class="people-joined">
										<h5>162</h5>
										<span>Joined People</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- our-events-section-2 end -->

@endsection