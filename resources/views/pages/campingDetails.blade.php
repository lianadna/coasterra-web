@extends('layout.layout')

@php
    $title='Camping Details';
    $subTitle='Camping Details';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section p-t-120 p-b-250 p-t-lg-80 p-t-md-80 p-t-xs-60">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
						@php
							$collected = $camping?->collected() ?? 0;
							$progress = $camping?->progress() ?? 0;
							$daysLeft = $camping?->end_date && $camping->end_date->isFuture()
								? (int) now()->startOfDay()->diffInDays($camping->end_date->startOfDay())
								: null;
						@endphp
						<div class="thumb-wrap m-b-30">
							<img src="{{ $camping?->image ? Storage::url($camping->image) : asset('assets/img/thumbs/thumb-114.webp') }}"
								alt="{{ $camping?->title ?? 'campaign' }}"/>
						</div>
						<div class="count-down-date m-b-20">
							<i class="fa-light fa-calendar-days"></i>
							<p>{{ $daysLeft !== null ? $daysLeft.' Days Left' : 'Open' }}</p>
						</div>
						<div class="details-title m-b-15">
							<h2>{{ $camping?->title ?? 'No campaign published yet' }}</h2>
						</div>
						<div class="detail-text m-b-30">
							<p>{{ $camping?->description ?? 'Create a campaign from the admin panel and it will appear here.' }}</p>
						</div>
						@if ($camping)
							<div class="donation-card m-b-50">
								<h4>{{ $camping->subtitle ?: 'Your support makes a lasting impact.' }}</h4>
								<div class="donation-wrap-2">
									<div class="left">
										<div class="d-top">
											<p>Donation Complete</p>
											<p>{{ $progress }}%</p>
										</div>
										<div class="progress" role="progressbar" aria-label="Donation progress"
											aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
											<div class="progress-bar" style="width: {{ $progress }}%"></div>
										</div>
										<div class="d-bottom">
											<div class="fund">
												<p>Raised: <span>Rp {{ number_format($collected, 0, ',', '.') }}</span></p>
												<p>-</p>
												<p>Goal: <span>Rp {{ number_format($camping->target, 0, ',', '.') }}</span></p>
											</div>
										</div>
									</div>
									<a href="{{ route('campingDonation', $camping) }}" class="right">
										<span class="icon"><i class="fa-solid fa-hand-holding-circle-dollar"></i></span>
										Donate Now
									</a>
								</div>
							</div>
						@endif
							<div class="details-title m-b-15">
								<h2>About The Forest</h2>
							</div>
							<div class="detail-text m-b-25">
								<p>
									Our forest restoration activities include site preparation, planting native species, monitoring growth, and engaging local communities in stewardship. These efforts help create resilient habitats and support wildlife.
								</p>
							</div>
							<div class="list-wrapper m-b-40">
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Promote ecological restoration and biodiversity.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Engage communities through education and volunteer programs.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Scale impact by partnering with local organizations and stakeholders.</p>
									</li>
								</ul>
								<ul class="list-wrap">
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Support renewable energy solutions to reduce environmental impact.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Train leaders to manage and sustain restoration projects.</p>
									</li>
									<li>
										<div class="icon">
											<i class="fa-solid fa-check"></i>
										</div>
										<p>Monitor ecological outcomes and adapt practices for success.</p>
									</li>
								</ul>
							</div>
							<div class="gallery-slider-active m-b-50">
								<div class="swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img src="{{ asset('assets/img/thumbs/thumb-109.webp') }}" alt="thumb">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img src="{{ asset('assets/img/thumbs/thumb-109.webp') }}" alt="thumb">
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="banner-slide-wrap">
												<div class="thumb">
													<img src="{{ asset('assets/img/thumbs/thumb-109.webp') }}" alt="thumb">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="gallery-pagination-wrap">
									<div class="gallery-pagination"></div>
								</div>
							</div>
						@php
							$recentDonations = $camping
								? $camping->donations()->with('donor')->where('status', 'SUCCESS')->latest('date')->take(6)->get()
								: collect();
							$donorCount = $camping ? $camping->donations()->where('status', 'SUCCESS')->distinct('donor_id')->count('donor_id') : 0;
						@endphp
						<div class="details-title-2 m-b-30">
							<h2>Recent Donors</h2>
							<div class="top-right">
								<img src="{{ asset('assets/img/authors/author-1.webp') }}" alt="authors"/>
								<div class="people-joined">
									<h5>{{ $donorCount }}</h5>
									<span>People Donated</span>
								</div>
							</div>
						</div>
						<div class="donator-cards m-b-60">
							@forelse ($recentDonations as $donation)
								<div class="donator-card">
									<div class="thumb">
										<img src="{{ asset('assets/img/thumbs/thumb-115.webp') }}" alt="thumb"/>
									</div>
									<div class="donator-name">
										<h6>{{ $donation->donor?->name ?? 'Anonymous' }}</h6>
									</div>
									<div class="date-of-donate">
										<p>{{ ($donation->date ?? $donation->created_at)?->format('M d, Y') }}</p>
									</div>
									<div class="donation-amount">
										<p>Total: <span>Rp {{ number_format($donation->amount, 0, ',', '.') }}</span></p>
									</div>
								</div>
							@empty
								<p>No confirmed donations yet. Be the first to support this campaign.</p>
							@endforelse
						</div>
						@include('elements.comments', ['subject' => $camping, 'subjectType' => 'camping'])
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
							<div class="detail-sidebar-inner">
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>
											<img src="{{ asset('assets/img/icons/icon-20.svg') }}" alt="icon"/>
											Organizer
										</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="organizer-info-wrap">
										<div class="thumb">
											<img src="{{ asset('assets/img/thumbs/thumb-120.webp') }}" alt="thumb"/>
										</div>
										<div class="name">
											<h3>Bm Ashik</h3>
										</div>
										<div class="text">
											<p>
												“Improve your scientific skills including research”
											</p>
										</div>
										<div class="divider"></div>
										<div class="date m-b-10">
											<i class="fa-light fa-calendar-days"></i>
											<p>24th Oct, 2024</p>
										</div>
										<div class="location">
											<i class="fa-light fa-location-dot"></i>
											<p>Grant Ave Park (Carteret)</p>
										</div>
									</div>
								</div>
								<div class="s-widget-wrap m-b-30">
									<div class="w-title">
										<h3>Recent Campaigns</h3>
										<div class="bar-wrap">
											<div class="bar-1"></div>
											<div class="bar-2"></div>
										</div>
									</div>
									<div class="recent-campaigns">
										<div class="campaign">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-121.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Plantation- Jun 13, 2024</p>
												</div>
												<div class="name">
													<h5>
														Sustainable Energy for All: Donation Matters
													</h5>
												</div>
											</div>
										</div>
										<div class="campaign">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-122.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Forest- Jun 20, 2024</p>
												</div>
												<div class="name">
													<h5>Renewable Energy Technology of Secrets</h5>
												</div>
											</div>
										</div>
										<div class="campaign">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-123.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Cleaning - Feb 09, 2024</p>
												</div>
												<div class="name">
													<h5>Nature’s Symphony: Exploring Ecology</h5>
												</div>
											</div>
										</div>
										<div class="campaign campaign-last">
											<div class="thumb">
												<img src="{{ asset('assets/img/thumbs/thumb-124.webp') }}" alt="thumb"/>
											</div>
											<div>
												<div class="date">
													<p>Forest - Jan 30, 2024</p>
												</div>
												<div class="name">
													<h5>Grow with Us: Tree Planting Day</h5>
												</div>
											</div>
										</div>
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
											<a href="https://facebook.com">
												<i class="fab fa-facebook-f"></i>
											</a>
											<a href="https://twitter.com">
												<i class="fab fa-x-twitter"></i>
											</a>
											<a href="https://www.instagram.com">
												<i class="fab fa-instagram"></i>
											</a>
											<a href="https://linkedin.com">
												<i class="fab fa-linkedin-in"></i>
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
		<div class="d-shape-1">
			<img src="{{ asset('assets/img/shapes/shape-31.webp') }}" alt="shape-31"/>
		</div>
	</section>
	<!-- services-details-section end -->

@endsection