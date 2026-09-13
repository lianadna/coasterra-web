@extends('layout.layout')

@php
    $title='Blog Standard';
    $subTitle='Blog Standard';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-duration="1000"
							data-aos-delay="600">
						@forelse ($blogs as $post)
							<div class="blog-card-4 m-b-30">
								<div class="thumb">
									<a href="{{ route('blogDetails', $post) }}">
										<img src="{{ $post->image ? Storage::url($post->image) : asset('assets/img/thumbs/thumb-144.webp') }}"
											alt="{{ $post->title }}" />
									</a>
									@if ($post->category)
										<div class="category">
											<a href="{{ route('blogStandard', ['category' => $post->category_id]) }}">{{ $post->category->title }}</a>
										</div>
									@endif
								</div>
								<div class="content">
										<div class="blog-info">
											<div class="publisher-info">
												<img src="{{ $post->author?->image ? Storage::url($post->author->image) : asset('assets/img/thumbs/thumb-143.webp') }}" alt="thumb" />
												<p>By {{ $post->author?->name ?? 'Admin' }}</p>
											</div>
											<div class="date">
												<i class="fa-light fa-calendar-days"></i>
												<p>{{ $post->created_at->format('jS M, Y') }}</p>
											</div>
										</div>
										<div class="title">
											<h3>
												<a href="{{ route('blogDetails', $post) }}">{{ $post->title }}</a>
											</h3>
										</div>
										<div class="text">
											<p>{{ Str::limit(strip_tags($post->description), 180) }}</p>
										</div>
										<a href="{{ route('blogDetails', $post) }}"
											class="e-primary-btn has-icon has-small read-more-btn">
											Read More
											<span class="icon-wrap">
												<span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
											</span>
										</a>
								</div>
							</div>
						@empty
							<p class="text-center">
								@if ($search || $activeCategory)
									No posts match your filter. <a href="{{ route('blogStandard') }}">Show all posts</a>.
								@else
									No blog posts published yet.
								@endif
							</p>
						@endforelse
						<div class="text-center m-b-30">
							@include('elements.pagination', ['paginator' => $blogs])
						</div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000"
							data-aos-delay="800">
						@include('elements.blog-sidebar', ['searchAction' => route('blogStandard')])
							<div class="s-widget-wrap">
								<div class="detail-contact text-center">
									<div class="thumb">
										<img src="{{ asset('assets/img/shapes/shape-47.webp') }}" alt="shape" />
									</div>
									<div class="icon-info-wrap">
										<div class="icon-wrap">
											<div class="icon">
												<img src="{{ asset('assets/img/icons/icon-18.svg') }}" alt="icon" />
											</div>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-shape-1">
			<img src="{{ asset('assets/img/shapes/shape-31.webp') }}" alt="shape-31" />
		</div>
	</section>
	<!-- services-details-section end -->

@endsection