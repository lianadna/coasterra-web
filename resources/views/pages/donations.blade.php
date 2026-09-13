@extends('layout.layout')

@php
    $title='Donations';
    $subTitle='Donations';
@endphp

@section('content')

	<!-- services-details-section start -->
	<section class="services-details-section-2 p-t-120 p-b-225">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="details-layout-wrap">
						<div class="details-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
							<div class="detail-info-wrap m-b-60">
								<div class="detail-info-contents">
									<div class="notice m-b-35">
										<img src="{{ asset('assets/img/icons/icon-21.svg') }}" alt="icon"/>
										<p>
											<span> Notice: </span>
											Test Mode Is Enabled. While In Test Mode No Live
											Donations Are Processed.
										</p>
									</div>
									<div class="make-donate m-b-30">
										<div class="details-subtitle m-b-20">
											<h4>
                                                <span><img src="{{ asset('assets/img/icons/icon-4.svg') }}" alt="icon"/></span>
												Your donation helps us
											</h4>
										</div>
										<div class="icon-wrap">
											<input class="selected-amount" placeholder="0" value="240"/>
											<i class="fa-solid fa-dollar-sign"></i>
										</div>
									</div>
									<div class="choose-currency-2 m-b-15">
										<p>Choose Currency:</p>
										<button class="amount">$10</button>
										<button class="amount">$25</button>
										<button class="amount">$50</button>
										<button class="amount active">$100</button>
										<button class="amount">$250</button>
										<button class="custom-amount">
											<i class="fa-solid fa-sliders"></i>
											Custom Amoun
										</button>
									</div>
									<div class="thank-you-text m-b-30">
										<p>❤️Thank you for supporting our environmental initiatives!</p>
									</div>
									<div class="payment-method-form">
										<div class="payment-title">
											<h3>Select Payment Method</h3>
										</div>
										<div class="select-payment-method">
											<div class="method">
												<input type="checkbox" name="test" id="test"/>
												<label for="test">Test Donation</label>
											</div>
											<div class="method">
												<input type="checkbox" name="offline" id="offline"/>
												<label for="offline">Offline Donation</label>
											</div>
											<div class="method">
												<input type="checkbox" name="credit" id="credit"/>
												<label for="credit">Credit Card</label>
											</div>
										</div>
										<form action="#">
											<h5>Personal Information:</h5>
											<div class="info-input m-b-20">
												<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jhon Abraham  "/>
												<input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Email Address"/>
											</div>
											<div class="m-b-20">
                                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Say Something..." rows="4"></textarea>
											</div>
											<div class="form-bottom">
												<button type="submit" class="e-primary-btn has-icon">
													Send Message
													<span class="icon-wrap">
						                                <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
													</span>
												</button>
												<p>Total Donation: $100</p>
											</div>
											<div class="impact-text">
												<p>
													<span>Direct Impact: </span>Your donations reach
													the most vulnerable communities around the world.
												</p>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="detail-sidebar" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
							<div class="s-widget-wrap m-b-30">
								<div class="w-title">
									<h3>Recent Course</h3>
									<div class="bar-wrap">
										<div class="bar-1"></div>
										<div class="bar-2"></div>
									</div>
								</div>
								<div class="recent-course-slider-active" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
									<div class="swiper">
										<div class="swiper-wrapper">
									@forelse ($campings as $camping)
										@php
											$collected = $camping->collected();
											$progress = $camping->progress();
											$daysLeft = $camping->end_date && $camping->end_date->isFuture()
												? (int) now()->startOfDay()->diffInDays($camping->end_date->startOfDay())
												: null;
										@endphp
										<div class="swiper-slide">
											<div class="camping-card-2 widget-style">
												<div class="thumb">
													<a href="{{ route('campingDetails', $camping) }}">
														<img src="{{ $camping->image ? Storage::url($camping->image) : asset('assets/img/thumbs/thumb-4.webp') }}"
															alt="{{ $camping->title }}"/>
													</a>
													<div class="date">
														<i class="fa-regular fa-clock"></i>
														<span>{{ $daysLeft !== null ? $daysLeft.' Days Left' : 'Open' }}</span>
													</div>
												</div>
												<div class="content">
													<div class="donation-wrap">
														<div class="content-top">
															<div class="title">
																<h3>
																	<a href="{{ route('campingDetails', $camping) }}">{{ $camping->title }}</a>
																</h3>
															</div>
														</div>
														<div class="d-top">
															<p>Donation Complete</p>
															<p>{{ $progress }}%</p>
														</div>
														<div class="progress" role="progressbar" aria-label="Donation progress"
															aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar" style="width: {{ $progress }}%"></div>
														</div>
														<div class="fund">
															<p>Raised: <span>Rp {{ number_format($collected, 0, ',', '.') }}</span></p>
															<p>Goal: <span>Rp {{ number_format($camping->target, 0, ',', '.') }}</span></p>
														</div>
														<div class="d-bottom">
															<a href="{{ route('campingDonation', $camping) }}" class="e-primary-btn has-small has-icon d-btn">
																Donate Now
																<span class="icon-wrap">
																	<span class="icon">
																		<i class="fa-regular fa-arrow-right"></i>
																		<i class="fa-regular fa-arrow-right"></i>
																	</span>
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									@empty
										<div class="swiper-slide">
											<p>No campaigns running yet.</p>
										</div>
									@endforelse
										</div>
									</div>
									<div class="recent-course-pagination-wrap">
										<div class="recent-course-pagination"></div>
									</div>
								</div>
							</div>
							<div class="s-widget-wrap m-b-30">
								<div class="detail-contact text-center">
									<div class="thumb">
										<img src="{{ asset('assets/img/shapes/shape-47.webp') }}" alt="shape"/>
									</div>
									<div class="icon-info-wrap">
										<div class="icon-wrap">
											<div class="icon">
												<img src="{{ asset('assets/img/icons/icon-18.svg') }}" alt="icon"/>
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
			<img src="{{ asset('assets/img/shapes/shape-30.webp') }}" alt="shape-30">
		</div>
	</section>
	<!-- services-details-section end -->

@endsection

