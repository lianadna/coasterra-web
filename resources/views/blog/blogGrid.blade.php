@extends('layout.layout')

@section('title', 'Galeri Blog | Coasterra')
@section('meta_description', "Jelajahi artikel blog Coasterra - kabar dan cerita dari program konservasi pesisir dan relawan kami.")

@php
    $title='Blog Grid';
    $subTitle='Blog Grid';
@endphp

@section('content')

	<!-- volunteer-section start -->
	<section class="blog-section p-t-120 p-b-120 p-t-lg-80 p-b-lg-80 p-t-md-60 p-b-md-60 p-t-xs-60 p-b-xs-60">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				@forelse ($blogs as $post)
					<div class="col-xl-4 col-md-6 col-sm-12 m-b-30">
						<div class="blog-card-2">
							<div class="thumb">
								<a href="{{ route('blogDetails', $post) }}">
									<img src="{{ $post->image ? Storage::url($post->image) : asset('assets/img/thumbs/thumb-32.webp') }}"
										alt="{{ $post->title }}"/>
								</a>
								<div class="event-date">
									<h2>{{ $post->created_at->format('d') }}</h2>
									<h5>{{ $post->created_at->format('M') }}</h5>
								</div>
							</div>
							<div class="content">
								<div class="content-top p-0 m-b-20">
									<div class="author">
										<div class="admin">
											<i class="fa-light fa-circle-user"></i>
											<span>{{ $post->author?->name ?? 'Admin' }}</span>
										</div>
										@if ($post->category)
											<div class="solar">
												<i class="fa-light fa-bookmark"></i>
												<span>{{ $post->category->title }}</span>
											</div>
										@endif
									</div>
									<div class="title">
										<h3>
											<a href="{{ route('blogDetails', $post) }}">{{ $post->title }}</a>
										</h3>
									</div>
								</div>
								<div class="content-bottom">
									<a href="{{ route('blogDetails', $post) }}" class="e-primary-btn has-icon has-small read-more-btn">
										Read More
										<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="col-12 text-center">
						<p>
							@if ($search || $activeCategory)
								No posts match your filter. <a href="{{ route('blogGrid') }}">Show all posts</a>.
							@else
								No blog posts published yet.
							@endif
						</p>
					</div>
				@endforelse
			</div>
			<div class="row justify-content-center text-center m-t-20" data-aos="fade-up" data-aos-duration="1000"
			     data-aos-delay="200">
				<div class="col-xl-6">
					@include('elements.pagination', ['paginator' => $blogs])
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section start -->

@endsection