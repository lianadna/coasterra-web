@extends('layout.layout')

@section('title', 'Hubungi Kami | Coasterra')
@section('meta_description', "Hubungi Coasterra untuk kerja sama, donasi, atau pertanyaan seputar program kami.")

@php
    $title='Contact Us';
    $subTitle='Contact Us';
@endphp

@section('content')

	<!-- services-section start -->
	<section class="services-section p-t-120">
		<div class="container">
			<div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
				<div class="col-xl-4">
					<div class="service-card">
						<div class="service-top">
							<h4>Our Location</h4>
							<i class="fa-light fa-location-dot"></i>
						</div>
						<div class="service-content">
							<p>Indonesia</p>
						</div>
						<div class="i-shape">
							<i class="fa-light fa-location-dot"></i>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="service-card">
						<div class="service-top">
							<h4>Phone
								Numbers</h4>
							<i class="fa-light fa-phone-volume"></i>
						</div>
						<div class="service-content">
							<p>+628 888 888 8888</p>
						</div>
						<div class="i-shape">
							<i class="fa-light fa-phone-volume"></i>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="service-card">
						<div class="service-top">
							<h4>Email
								Address</h4>
							<i class="fa-light fa-envelope"></i>
						</div>
						<div class="service-content">
							<p>coasterra.id@gmail.com</p>
						</div>
						<div class="i-shape">
							<i class="fa-light fa-envelope"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- services-section end -->

	<!-- contact-section start -->
	<div class="contact-section p-t-120 p-b-120">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-9">
					<div class="contact-form-wrap" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
						<h3>Get in touch with our team</h3>
						<p>Fill out the form and Feel free to say !!</p>
						<form id="contact-form" action="assets/mail.php" method="post">
							<div class="row form-row">
								<div class="col-xl-6">
									<div class="input-wrap">
										<input type="text" placeholder="Full Name" name="name">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="input-wrap">
										<input type="tel" placeholder="Phone Number" name="phone">
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-xl-6">
									<div class="input-wrap">
										<input type="email" placeholder="Email Address" name="email">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="input-wrap">
										<input type="text" placeholder="Current Location" name="location">
									</div>
								</div>
							</div>
							<div class="row form-row">
								<div class="col-xl-6">
									<div class="input-wrap">
										<input type="text" placeholder="Date of Birth" name="date">
									</div>
								</div>
								<div class="col-xl-6">
									<div class="select-wrap">
										<select name="occupation">
											<option value="0">Occupation</option>
											<option value="1">Doctor</option>
											<option value="2">Engineer</option>
											<option value="3">Teacher</option>
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
										<textarea placeholder="Say Something..." name="message"></textarea>
									</div>
									<div class="input-button">
										<button type="submit" class="e-primary-btn has-icon">
											Submit Now
											<span class="icon-wrap">
			                                    <span class="icon"><i class="fa-regular fa-arrow-right"></i><i class="fa-regular fa-arrow-right"></i></span>
			                                </span>
										</button>
									</div>
								</div>
							</div>
						</form>
						<p class="form-message"></p>
					</div>
				</div>
			</div>
		</div>
		<div class="c-shape-1">
			<img src="{{ asset('assets/img/shapes/shape-34.webp') }}" alt="shape">
		</div>
		<div class="c-shape-2">
			<img src="{{ asset('assets/img/shapes/shape-35.webp') }}" alt="shape">
		</div>
	</div>
	<!-- contact-section end -->

	<!-- map-section start -->
	<div class="map-section">
		<div class="contact-map" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
			<iframe src="https://www.google.com/maps?q=indonesia&amp;z=5&amp;t=m&amp;hl=en&amp;output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	<!-- map-section end -->

@endsection