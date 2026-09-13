@extends('layout.layout')

@php
    $title='Volunteer Details';
    $subTitle='Volunteer Details';
@endphp

@section('content')

	<!-- volunteer-details-section start -->
	<section class="volunteer-details-section p-t-130 p-b-120">
		<div class="container">
			@if ($volunteer)
				<div class="row align-items-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
					<div class="col-xl-5">
						<div class="volunteer-detail-card">
							<div class="thumb">
								<a href="{{ route('volunteer') }}">
									<img src="{{ $volunteer->image ? Storage::url($volunteer->image) : asset('assets/img/thumbs/thumb-83.webp') }}"
										alt="{{ $volunteer->name }}">
								</a>
								<div class="social-links">
									@if ($volunteer->instagram_url)
										<a href="{{ $volunteer->instagram_url }}" target="_blank" rel="noopener">
											<i class="fab fa-instagram"></i>
										</a>
									@endif
									@if ($volunteer->linkedin_url)
										<a href="{{ $volunteer->linkedin_url }}" target="_blank" rel="noopener">
											<i class="fa-brands fa-linkedin-in"></i>
										</a>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="volunteer-detail-content">
							<div class="content-wrap">
								<h4 class="subtitle">My Name is,</h4>
								<h3 class="title">{{ $volunteer->name }}</h3>
								<p>{{ $volunteer->role }}</p>
							</div>
							@if ($volunteer->summary)
								<div class="content-wrap">
									<h3 class="title style-2">Summary</h3>
									<p>{{ $volunteer->summary }}</p>
								</div>
							@endif
						</div>
					</div>
				</div>

				@if ($otherVolunteers->isNotEmpty())
					<div class="row m-t-60">
						<div class="col-12">
							<h3 class="title style-2 m-b-30">Other Volunteers</h3>
						</div>
						@foreach ($otherVolunteers as $other)
							<div class="col-xl-3 col-md-6 m-b-30">
								<div class="volunteer-card">
									<a href="{{ route('volunteerDetails', $other) }}">
										<div class="thumb">
											<img src="{{ $other->image ? Storage::url($other->image) : asset('assets/img/thumbs/thumb-17.webp') }}"
												alt="{{ $other->name }}">
										</div>
										<div class="author-info">
											<h5>{{ $other->name }}</h5>
											<p>{{ $other->role }}</p>
										</div>
									</a>
								</div>
							</div>
						@endforeach
					</div>
				@endif
			@else
				<div class="row">
					<div class="col-12 text-center">
						<p>No volunteers listed yet. Add one from the admin panel.</p>
					</div>
				</div>
			@endif
		</div>
	</section>
	<!-- volunteer-details-section end -->

@endsection