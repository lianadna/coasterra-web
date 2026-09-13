@extends('layout.layout')

@php
    $title='Projects';
    $subTitle='Our Projects';
@endphp

@section('content')

	<!-- services-section start -->
	<section class="services-section p-t-100 p-b-120">
		<div class="container">
			<div class="row justify-content-center text-center m-b-50 m-b-xs-40">
				<div class="col-xl-8">
					<div class="common-subtitle" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<img alt="icon-1" src="{{ asset('assets/img/icons/icon-2.svg') }}"> <span>Our Camping</span>
					</div>
					<div class="common-title m-b-0" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<h2>Projects We Have Completed</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
				@forelse ($projects as $project)
					<div class="col-xl-6 m-b-30">
						<div class="project-card style-2 style-service">
							<div class="thumb">
								<a href="{{ route('projectDetails', $project) }}">
									<img alt="{{ $project->title }}"
										src="{{ $project->image ? Storage::url($project->image) : asset('assets/img/thumbs/thumb-69.webp') }}">
								</a>
								<div class="tag">
									<p>No - {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</p>
								</div>
								<div class="content">
									<h5>{{ $project->title }}</h5>
									<p>{{ Str::limit(strip_tags($project->description), 140) }}</p>
									<div class="join-us">
										<a class="e-primary-btn has-icon" href="{{ route('projectDetails', $project) }}">Read More <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@empty
					<div class="col-12 text-center">
						<p>No projects published yet.</p>
					</div>
				@endforelse
			</div>
			<div class="row justify-content-center text-center m-t-20">
				<div class="col-xl-6">
					@include('elements.pagination', ['paginator' => $projects])
				</div>
			</div>
		</div>
	</section>
	<!-- services-section end -->

@endsection

