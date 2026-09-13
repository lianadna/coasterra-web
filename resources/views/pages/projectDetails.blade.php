@extends('layout.layout')

@php
    $title='Projects';
    $subTitle='Waste Management';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="thumb-wrap m-b-50">
							<img alt="{{ $project?->title ?? 'project' }}"
								src="{{ $project?->image ? Storage::url($project->image) : asset('assets/img/thumbs/thumb-111.webp') }}">
						</div>
						<div class="details-title m-b-15">
							<h2>{{ $project?->title ?? 'No project published yet' }}</h2>
						</div>
						<div class="detail-text m-b-30">
							@if ($project?->description)
								<p>{{ $project->description }}</p>
							@else
								<p>Add a project from the admin panel and its details will appear here.</p>
							@endif
						</div>
							<div class="details-title m-b-15">
								<h2>Project Challenging Story</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>The project includes waste audits, community collection events, and partnerships with local processors to ensure materials are recovered and reused.</p>
							</div>
							<div class="list-wrapper m-b-40">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Reduce waste and enhance resource recovery.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Reliable program delivery with community partners.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Scalable activities that achieve measurable impact.</p>
									</li>
								</ul>
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Promote renewable solutions and energy efficiency where appropriate.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Lead collaborative efforts across stakeholders to expand impact.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Ground actions in ecological research and best practices.</p>
									</li>
								</ul>
							</div>
							<div class="gallery-slider-active m-b-50">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}"> <a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}"> <a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}"> <a class="play-btn" data-fancybox="" href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="gallery-pagination-wrap">
									<div class="gallery-pagination"></div>
								</div>
							</div>
							<div class="testimonial-wrap m-b-60">
								<div class="icon"><img alt="icon" src="{{ asset('assets/img/icons/icon-17.svg') }}"></div>
								<p class="review">This project significantly reduced landfill inputs in the first year and increased community recycling participation.</p>
								<div class="author">
									<h3>Project Team</h3>
									<p>Volunteers & Partners</p>
								</div>
							</div>
							<div class="details-title m-b-15">
								<h2>Activities & Features</h2>
							</div>
							<div class="detail-text m-b-20">
								<p>Our project activities include community workshops, hands-on recycling events, and ongoing monitoring to ensure lasting environmental benefits.</p>
							</div>
							<div class="list-wrapper m-b-50">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Support scaling from pilot to community-wide programs.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Continuously refine methods using local feedback and scientific insight.</p>
									</li>
								</ul>
							</div>
							<div class="view-project-wrap">
								<div class="previous-project">
									<div class="project-thumb-wrap"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-112.webp') }}"></div>
									<div class="project-content-wrap">
										<div class="view-project-btn">
											<a href="{{ route('project') }}"><span class="icon-1"><i class="fa-regular fa-arrow-right"></i></span> Previous Project</a>
										</div>
										<div class="project-title">
											<h5>Plantation Product</h5>
										</div>
										<div class="published-date">
											<p>26 September, 2023</p>
										</div>
									</div>
								</div>
								<div class="next-project">
									<div class="project-thumb-wrap"><img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-113.webp') }}"></div>
									<div class="project-content-wrap">
										<div class="view-project-btn">
											<a href="{{ route('project') }}">Next Project <span class="icon-2"><i class="fa-regular fa-arrow-right"></i></span></a>
										</div>
										<div class="project-title">
											<h5>Forest Cleaning</h5>
										</div>
										<div class="published-date">
											<p>12 November, 2023</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
							<div class="detail-sidebar-inner">
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>Project Information</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="project-info-wrap">
										<div class="project-text">
											<p>Improve your scientific skills including research.</p>
										</div>
									@php
										$client = $project?->client;
										$infos = array_values(array_filter([
											$client?->name ? ['fa-regular fa-user', 'Client Name', $client->name] : null,
											$project?->category ? ['fa-regular fa-filter', 'Category', $project->category->title] : null,
											$client?->start_date ? ['fa-regular fa-clock-rotate-left', 'Start time', $client->start_date->format('d M, Y')] : null,
											$client?->end_date ? ['fa-regular fa-alarm-clock', 'End time', $client->end_date->format('d M, Y')] : null,
											$client?->budget ? ['fa-regular fa-dollar-sign', 'Budget', 'Rp '.number_format($client->budget, 0, ',', '.')] : null,
											$client?->location ? ['fa-regular fa-location-dot', 'Location', $client->location] : null,
											$project ? ['fa-regular fa-circle-check', 'Status', ucfirst($project->status)] : null,
										]));
									@endphp
									@forelse ($infos as $index => [$icon, $key, $value])
										<div class="project-info {{ $loop->last ? 'project-info-last' : '' }}">
											<div class="icon">
												<i class="{{ $icon }}"></i>
											</div>
											<div class="key-value">
												<div class="key">
													<p>{{ $key }}</p>
												</div>
												<div class="value">
													<h6>{{ $value }}</h6>
												</div>
											</div>
										</div>
									@empty
										<div class="project-info project-info-last">
											<div class="key-value">
												<div class="key"><p>No project details available yet.</p></div>
											</div>
										</div>
									@endforelse
									</div>
								</div>
								<div class="s-widget-wrap">
									<div class="w-title">
										<h3>Share This Project</h3>
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
		</div>
		<div class="d-shape-1"><img alt="shape-31" src="{{ asset('assets/img/shapes/shape-31.webp') }}"></div>
	</section>
	<!-- services-details-section end -->

@endsection