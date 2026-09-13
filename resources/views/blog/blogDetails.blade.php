@extends('layout.layout')

@php
    $title='Blog Details';
    $subTitle='Blog Details';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-delay="600"
							data-aos-duration="1000">
						<div class="blog-card-5 m-b-40">
							<div class="thumb">
								<a href="{{ route('blogGrid') }}">
									<img alt="{{ $blog?->title ?? 'blog' }}"
										src="{{ $blog?->image ? Storage::url($blog->image) : asset('assets/img/thumbs/thumb-148.webp') }}">
								</a>
							</div>
							<div class="content">
								<div class="blog-info">
									<div class="publisher-info">
										<img alt="author"
											src="{{ $blog?->author?->image ? Storage::url($blog->author->image) : asset('assets/img/thumbs/thumb-143.webp') }}">
										<p>By {{ $blog?->author?->name ?? 'Admin' }}</p>
									</div>
									<div class="date">
										<i class="fa-light fa-calendar-days"></i>
										<p>{{ $blog?->created_at?->format('jS M, Y') }}</p>
									</div>
									@if ($blog?->category)
										<div class="comment">
											<i class="fa-light fa-bookmark"></i>
											<p>{{ $blog->category->title }}</p>
										</div>
									@endif
								</div>
								<div class="title">
									<h3>{{ $blog?->title ?? 'No blog post published yet' }}</h3>
								</div>
								<div class="text">
									@forelse (preg_split('/\R{2,}/', (string) ($blog?->description ?? '')) as $paragraph)
										@if (trim($paragraph) !== '')
											<p class="m-b-15">{{ trim($paragraph) }}</p>
										@endif
									@empty
										<p>Publish a post from the admin panel and it will appear here.</p>
									@endforelse
								</div>
							</div>
						</div>
							<div class="details-title m-b-15">
								<h2>How to Improve</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>
									Improve reforestation outcomes by selecting native species,
									preparing the planting sites properly, and establishing regular
									monitoring and maintenance. Community engagement and local
									stewardship are essential for long-term success.
								</p>
							</div>
							<div class="list-wrapper m-b-35">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Promote native habitat restoration and biodiversity.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Engage local communities through education and volunteer programs.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Scale projects by partnering with local NGOs and stakeholders.</p>
									</li>
								</ul>
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Support renewable energy solutions to reduce project emissions.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Train community leaders to manage and sustain restoration efforts.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Measure ecological impact and adapt practices based on monitoring.</p>
									</li>
								</ul>
							</div>
							<div class="gallery-slider-active m-b-50">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}">
													<a class="play-btn" data-fancybox=""
														href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}">
													<a class="play-btn" data-fancybox=""
														href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-109.webp') }}">
													<a class="play-btn" data-fancybox=""
														href="https://www.youtube.com/watch?v=fLeJJPxua3E&amp;ab_channel=Motiversity">Play</a>
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
								<p class="review">
									"Working with the reforestation team was inspiring — we saw
									seedlings grow into saplings within months and local wildlife begin
									to return. The project’s community focus made it truly sustainable."
								</p>
								<div class="author">
									<h3>Rebecca Moore</h3>
									<p>Community Coordinator</p>
								</div>
							</div>
							<div class="details-title m-b-15">
								<h2>Activities & Features</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>
									Activities include planting days, invasive species removal, soil
									improvement, and public workshops on tree care and ecosystem
									stewardship. Volunteers receive training and tools to ensure safe
									and effective work.
								</p>
							</div>
							<div class="detail-thumb-wrap">
								<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-150.webp') }}">
								<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-149.webp') }}">
								<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-151.webp') }}">
							</div>
							<div class="list-wrapper m-b-35">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>
											Local volunteers and partner organizations coordinate planting
											schedules and provide ongoing care for young trees to maximize
											survival rates.
										</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>
											Whether you are a volunteer, donor, or partner, your participation
											helps scale conservation impact and restore natural habitats.
										</p>
									</li>
								</ul>
							</div>
							<div class="divider-2"></div>
							<div class="blog-tags">
								<div class="tag-wrap">
									<p>Tags:</p>
									<div class="tags">
										<button>Forest</button>
										<button>Pollution</button>
										<button>Plantation</button>
									</div>
								</div>
								<div class="socials">
									<div class="social-links">
										<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
										<a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a>
										<a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
										<a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						@include('elements.comments', ['subject' => $blog, 'subjectType' => 'blog'])
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-delay="800"
							data-aos-duration="1000">
							<div class="detail-sidebar-inner">
								@include('elements.blog-sidebar', ['searchAction' => route('blogGrid')])
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>Our Gallery</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="sidebar-gallery">
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-134.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-131.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-132.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-133.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-130.webp') }}">
										</div>
										<div class="thumb">
											<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-129.webp') }}">
										</div>
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
				</div>
			</div>
		</div>
		<div class="d-shape-1"><img alt="shape-31" src="{{ asset('assets/img/shapes/shape-31.webp') }}"></div>
	</section>
	<!-- services-details-section end -->

@endsection