@extends('layout.layout')

@php
    $title='Become a Volunteer';
    $subTitle='Become a Volunteer';
@endphp

@section('content')

	<!-- volunteer-section start -->
	<section class="why-us-section-2 style-2 p-t-115 p-b-245">
		<div class="container">
			<div class="row align-items-center p-b-80">
				<div class="col-xl-6 px-xl-5">
					<div class="thumb" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
						<div class="thumb-1">
							<img alt="thumb-1" src="{{ asset('assets/img/thumbs/thumb-24.webp') }}">
							<div class="s-shape"><img alt="shape-1" src="{{ asset('assets/img/shapes/shape-14.webp') }}"></div>
						</div>
						<div class="thumb-2 style-2">
							<img alt="thumb-2" src="{{ asset('assets/img/thumbs/thumb-25.webp') }}">
							<div class="experience-shape">
								<h3>
									<span class="purecounter" data-purecounter-duration="2" data-purecounter-end="29">0</span>+
								</h3>
								<p>Years of experience</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 px-xl-5">
					<div class="volunteer-form-content" data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000">
						<h3>Introduce Yourself !</h3>
						<p>Fill out the form and Feel free to say !!</p>
						<form action="#">
							<div class="row form-row">
								<div class="col-xl-6 col-md-6">
									<div class="input-wrap">
										<input placeholder="Full Name" type="text">
									</div>
								</div>
								<div class="col-xl-6 col-md-6">
									<div class="input-wrap">
										<input placeholder="Phone Number" type="tel">
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-xl-6 col-md-6">
									<div class="input-wrap">
										<input placeholder="Email Address" type="email">
									</div>
								</div>
								<div class="col-xl-6 col-md-6">
									<div class="input-wrap">
										<input placeholder="Current Location" type="text">
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-xl-6 col-md-6">
									<div class="input-wrap">
										<input placeholder="Date of Birth" type="text">
									</div>
								</div>
								<div class="col-xl-6 col-md-6">
									<div class="select-wrap">
										<select id="" name="">
											<option value="0">
												Occupation
											</option>
											<option value="1">
												Doctor
											</option>
											<option value="2">
												Engineer
											</option>
											<option value="3">
												Teacher
											</option>
										</select>
										<div class="select-icon">
											<i class="fa-regular fa-angle-down"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="input-wrap">
										<textarea placeholder="Say Something..."></textarea>
									</div>
									<div class="input-checkbox">
										<input id="terms" type="checkbox">
										<label for="terms"><span class="check-mark"></span> I Accept Terms & Conditions</label>
									</div>
									<div class="input-button">
										<button class="e-primary-btn has-icon is-hover-white" type="submit">Submit Now
											<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="v-summary-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<h4>Summary</h4>
						<div class="content">
							<p>
								Volunteers play a vital role in our environmental initiatives. By joining, you help restore habitats, educate communities, and support conservation projects that make a real difference.
							</p>
							<div class="info-wrapper">
								<div class="info">
									<div class="icon">
										<i class="fa-solid fa-check"></i>
									</div>
									<p>Ecology is the study of the relationship between living organisms and their environment.</p>
								</div>
								<div class="info">
									<div class="icon">
										<i class="fa-solid fa-check"></i>
									</div>
									<p>Solar power is a sustainable and cost-effective energy solution for the future.</p>
								</div>
								<div class="info">
									<div class="icon">
										<i class="fa-solid fa-check"></i>
									</div>
									<p>Focus on impactful actions that benefit the environment and local communities.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="c-shape-1"><img alt="shape-32" src="{{ asset('assets/img/shapes/shape-32.webp') }}"></div>
	</section>
	<!-- volunteer-section end -->

@endsection