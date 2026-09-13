@extends('layout.layout')

@php
    $title='Volunteers';
    $subTitle='We Are Friends';
@endphp

@section('content')

	<!-- volunteer-section start -->
	<section class="volunteer-section p-t-100">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				@forelse ($volunteers as $volunteer)
					<div class="col-xl-3 m-b-30">
						<div class="volunteer-card">
							<a href="{{ route('volunteerDetails', $volunteer) }}">
								<div class="thumb">
									<img src="{{ $volunteer->image ? Storage::url($volunteer->image) : asset('assets/img/thumbs/thumb-17.webp') }}"
										alt="{{ $volunteer->name }}">
								</div>
								<div class="author-info">
									<h5>{{ $volunteer->name }}</h5>
									<p>{{ $volunteer->role }}</p>
								</div>
							</a>
							<div class="socials">
								<button class="share-button">
									<i class="fa-light fa-share-nodes"></i>
								</button>
								<div class="social-links">
									@if ($volunteer->instagram_url)
										<a href="{{ $volunteer->instagram_url }}" target="_blank" rel="noopener">
											<i class="fab fa-instagram"></i>
										</a>
									@endif
									@if ($volunteer->linkedin_url)
										<a href="{{ $volunteer->linkedin_url }}" target="_blank" rel="noopener">
											<i class="fab fa-linkedin-in"></i>
										</a>
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
			<div class="row justify-content-center text-center m-t-20">
				<div class="col-xl-6">
					@include('elements.pagination', ['paginator' => $volunteers])
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section start -->

	<!-- volunteer-section start -->
	<section class="volunteer-cta-section p-t-80 p-b-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="volunteer-cta-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<div class="content-wrap">
							<div class="common-title text-start">
								<h2>You can work with us if you want <span>😍</span></h2>
							</div>
							<div class="text">
								<p>Our volunteers collaborate as a team to support environmental projects, restore habitats, and educate communities. Together, we make a positive impact for a greener future.</p>
							</div>
							<div class="blog-btn">
								<a href="{{ route(('beVolunteer')) }}" class="e-primary-btn has-icon">
									Become a Volunteer
									<span class="icon-wrap">
                                        <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
									</span>
								</a>
							</div>
						</div>
						<div class="thumb-wrap">
							<img src="{{ asset('assets/img/thumbs/thumb-82.webp') }}" alt="thumb-82">
						</div>
						<div class="c-shape-1">
							<img src="{{ asset('assets/img/shapes/shape-33.webp') }}" alt="shape-33">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- volunteer-section end -->

@endsection