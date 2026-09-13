<footer class="footer-section p-t-125" style="background-image: url(assets/img/bg/footer-bg.svg)">
	<div class="container">
		<div class="row justify-content-between row-gap-md-5 row-gap-4 p-b-30">
			<div class="col-xl-4 col-lg-8 col-md-7">
				<div class="footer-widget">
					<div class="about-widget">
						<div class="footer-logo">
							<a href="{{ route('index') }}"><img alt="logo" src="{{ asset('assets/img/template/logo-vector.svg') }}"></a>
						</div>
						<div class="text">
							<p>Nature-Based Climate Solutions for Coastal Resilience & Empowered Communities.</p>
						</div>
						<div class="info">
							<p><b>We're Available</b></p>
							<p>Mon–Sat: <span>10:00 AM – 7:30 PM</span></p>
						</div>
						<div class="social-links">
							<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a> <a href="https://twitter.com"><i class="fab fa-x-twitter"></i></a> <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a> <a href="https://linkedin.com"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-4 col-md-5">
				<div class="footer-widget">
					<h3 class="w-title">Quick Links</h3>
					<ul>
						<li>
							<a href="{{ route('about') }}">About Us</a>
						</li>
						<li>
							<a href="{{ route('services') }}">Program</a>
						</li>
						<li>
							<a href="{{ route('volunteer') }}">Our Team</a>
						</li>
						<li>
							<a href="{{ route('blogStandard') }}">Blog</a>
						</li>
						<li>
							<a href="{{ route('contact') }}">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-xl-2 col-lg-4 col-md-5">
				<div class="footer-widget">
					<h3 class="w-title">Our Services</h3>
					<ul>
						<li><a href=" ">Coastal Assessment</a></li>
						<li><a href=" ">CSR Project Management</a></li>
						<li><a href=" ">Climate Education</a></li>
						<li><a href=" ">ESG Reporting</a></li>
						<li><a href=" ">Carbon Readiness</a></li>
						<li><a href=" ">Blue Carbon Enablement</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="footer-widget">
					<h3 class="w-title">Newsletter</h3>
					<div class="subscribe-form">
						<form action="#">
							<div class="input-wrap">
								<input placeholder="ashikulislambsl@gmail.com" type="text">
							</div>
							<div class="input-button">
								<button class="e-primary-btn has-icon is-hover-white" type="submit">Subscribe Now <span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span></button>
							</div>
							<div class="input-checkbox">
								<input id="agree" type="checkbox"> <label for="agree"><span class="check-mark"></span> I agree the policy</label>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-3">
			<div class="footer-bottom-layout-2">
				<div class="footer-copyright">
					© {{ now()->year }} Coasterra. All Rights Reserved.
				</div>
				<div class="footer-bottom-menu">
					<ul>
						<li>
							<a href="{{ route('contact') }}">Terms & Condition</a>
						</li>
						<li>
							<a href="{{ route('contact') }}">Privacy Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>