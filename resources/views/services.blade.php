<!DOCTYPE html>
<html lang="en">

    @include('elements.head')

<body>
{{-- <!-- preloader start-->
@include('elements.preloader')
<!-- preloader end  --> --}}

<!-- header-section start -->
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
									<li><a href="{{ route('about') }}">Who we are?</a></li>
									<li><a href="{{ route('services') }}">Services</a></li>
									{{-- Hide Pages & Blog --}}
									{{-- <li class="has-dropdown">
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
									</li> --}}
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
									<p><a href="tel:+6288888888888">+628 888 888 8888</a></p>
								</div>
							</div>
							<div class="header-btn-wrap d-none d-xl-flex">
								<a href="{{ route('services') }}" class="e-primary-btn has-icon">
									Explore More
									<span class="icon-wrap">
                                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
                                    </span>
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
				<li><a href="{{ route('about') }}">Home</a></li>
				<li><a href="{{ route('about') }}">Who we are?</a></li>
				<li><a href="{{ route('services') }}">Services</a></li>
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
		</div>
	</div>
	<div class="off-canvas-menubar-overlay" data-close="menubar"></div>
</div>
<!-- off-canvas-menubar end -->

<main>
	<!-- breadcrumb-section start -->
	<section class="breadcrumb-section bg-cream">
		<div class="container-fluid">
			<div class="row g-0">
				<div class="col-xl-6 col-lg-6">
					<div class="breadcrumb-content" style="background-image: url(assets/img/template/service-head1.png)">
						<div class="breadcrumb-nav" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
							<ul>
								<li>
									<a href="{{ route('index') }}">Home</a>
								</li>
								<li>
									<a href="#">Service</a>
								</li>
							</ul>
						</div>
						<div class="breadcrumb-title" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
							<h2>Our Service</h2>
						</div>
						<div class="shape-1"><img alt="shape" src="{{ asset('assets/img/shapes/shape-1.webp') }}"></div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 d-none d-lg-block">
					<div class="breadcrumb-thumb"><img alt="thumb" src="{{ asset('assets/img/template/service-head3.png') }}"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-section end -->

	<!-- services-section start -->
	<section class="services-section bg-cream p-t-100 p-b-70">
		<div class="container">
			<div class="row justify-content-center text-center m-b-50 m-b-xs-40">
				<div class="col-xl-6">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>What We Do</span>
					</div>
					<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<h2>We Offer Services to Transform Climate Commitments</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				@forelse ($services as $service)
					<div class="col-xl-4 m-b-30">
						<div class="project-card style-service">
							<div class="thumb">
								<a href="{{ route('servicesDetails', $service) }}">
									<img alt="{{ $service->title }}"
										src="{{ $service->image ? Storage::url($service->image) : asset('assets/img/template/service-1.png') }}">
								</a>
								<div class="tag">
									<p>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
								</div>
								<div class="content">
									<h5>{{ $service->title }}</h5>
									<p>{{ $service->subtitle ?: Str::limit(strip_tags($service->description), 90) }}</p>
									<div class="join-us">
										<a class="e-primary-btn has-icon is-hover-white" href="{{ route('servicesDetails', $service) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="col-12 text-center">
						<p>No services published yet.</p>
					</div>
				@endforelse
			</div>
		</div>
		<div class="c-shape-1"><img alt="shape-30" src="{{ asset('assets/img/shapes/shape-30.webp') }}"></div>
		<div class="c-shape-2"><img alt="shape-31" src="{{ asset('assets/img/shapes/shape-31.webp') }}"></div>
	</section>
	<!-- services-section end -->

	<!-- process-section start -->
	<div class="process-section p-t-140 p-b-100">
		<div class="container">
			<div class="row">
				<div class="container">
					<div class="row justify-content-center text-center m-b-50 m-b-xs-40">
						<div class="col-xl-6">
							<div class="common-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
								<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Work Process</span>
							</div>
							<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
								<h2>How To Work With Us</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
				<div class="col-xl-4">
					<div class="service-card">
						<div class="service-top">
							<h4>Discovery</h4>
							<div class="number">
								<span>01</span>
							</div>
						</div>
						<div class="service-content">
							<p>We understanding our client needs and goals then conduct assessment to build strategy.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="service-card">
						<div class="service-top">
							<h4>Delivery</h4>
							<div class="number">
								<span>02</span>
							</div>
						</div>
						<div class="service-content">
							<p>We design and execute programs for our client or communities programs.</p>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="service-card">
						<div class="service-top">
							<h4>Reporting</h4>
							<div class="number">
								<span>03</span>
							</div>
						</div>
						<div class="service-content">
							<p>We provide clear, structured, and measurable report data to support our client</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="c-shape-1"><img alt="shape-32" src="{{ asset('assets/img/shapes/shape-32.webp') }}"></div>
	</div>
	<!-- process-section end -->

	<!-- dust-recycling-section start -->
	<section class="dust-recycling-section" style="background-image: url(assets/img/template/service-head2.png)">
		<div class="container">
			<div class="row justify-content-center align-items-xl-start align-items-center">
				<div class="col-lg-10 col-12 order-2 order-lg-1">
					<div class="dust-recycle-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<div class="dust-recycle-top">
							<h5>Planting Campaign</h5>
							<div class="services-4">
								<div class="service-2">
									<i class="fa-light fa-badge-check"></i>
									<p>Work With Professional Team</p>
								</div>
								<div class="service-2">
									<i class="fa-light fa-badge-check"></i>
									<p>Anytime Solution</p>
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

	<!-- faq-section start -->
	<section class="faq-section style-service p-t-120 p-b-240" style="background-image: url(assets/img/template/faq.png)">
		<div class="container">
			<div class="row faq">
				<div class="col-xl-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
					<div class="common-subtitle">
						<img alt="icon-2" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Question &amp; Answer</span>
					</div>
					<div class="common-title text-start">
						<h2>Frequently Asked Question <span>?</span></h2>
					</div>
					<div class="text">
						<p>We support environmental projects with practical solutions, community outreach, and long-term planning to ensure measurable conservation outcomes.</p>
					</div>
					<div class="blog-btn">
						<a class="e-primary-btn has-icon" href="{{ route('contact') }}">Do You Have Any Questions? <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
					</div>
					{{-- <div class="top-right">
						<img alt="authors" src="{{ asset('assets/img/authors/author-1.webp') }}">
						<div class="people-joined">
							<h5>2603</h5><span>Peoples Registered</span>
						</div>
					</div> --}}
				</div>
				<div class="col-xl-6" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
					<div class="accordion faq-accordion" id="accordionFlushExample">
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseOne" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseOne" data-bs-toggle="collapse" type="button"><span class="accordion-title">1.</span>How do I get started? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseOne">
								<div class="accordion-body">
									We provide clear guidance on how to get involved, from volunteer, events and supporting fundraising.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseTwo" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseTwo" data-bs-toggle="collapse" type="button"><span class="accordion-title">2.</span>What does a coastal assessment involve? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseTwo">
								<div class="accordion-body">
									We evaluate the coastal or environmental context relevant to your program, identifying opportunities and risks to build an effective strategy.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseThree" aria-expanded="false" class="accordion-button" data-bs-target="#flush-collapseThree" data-bs-toggle="collapse" type="button"><span class="accordion-title">3.</span>Where should I incorporate my business? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" id="flush-collapseThree">
								<div class="accordion-body">
									Start by contacting our team; we’ll help you identify priority projects and plan next steps for impact.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseFour" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFour" data-bs-toggle="collapse" type="button"><span class="accordion-title">4.</span>What types of organizations do you work with? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFour">
								<div class="accordion-body">
									We work with a variety of organizations including corporates, government, communities, NGOs, and University to deliver effective programs.
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header"><button aria-controls="flush-collapseFive" aria-expanded="false" class="accordion-button collapsed" data-bs-target="#flush-collapseFive" data-bs-toggle="collapse" type="button"><span class="accordion-title">5.</span>How do you measure and report impact? <span class="icon"><span class="icon-plus"></span> <span class="icon-minus"></span></span></button></h2>
							<div class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" id="flush-collapseFive">
								<div class="accordion-body">
									We provide ESG and impact reporting that gives you clear, measurable data to support your sustainability disclosures and demonstrate program outcomes.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- faq-section end-->

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
