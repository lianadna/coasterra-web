<!DOCTYPE html>
<html lang="en">
	
    @include('elements.head')

<body>
	<!-- preloader start-->
	@include('elements.preloader')
	<!-- preloader end  -->

	<!-- header-section start -->
	@include('elements.header')
	<!-- header-section end -->

	<!-- off-canvas-sidebar start -->
	@include('elements.sidebar')
	<!-- off-canvas-sidebar end -->

	<!-- off-canvas-menubar start -->
	@include('elements.menubar')
	<!-- off-canvas-menubar end -->

	<main>
		<!-- breadcrumb-section start -->
		@include('elements.breadcrumb')
		<!-- breadcrumb-section end -->

        	@yield('content')

		<!-- contact-info-section start -->
		@include('elements.infoSection')
		<!-- contact-info-section end -->
	</main>

	<!-- footer-section start -->
	@include('elements.footer')
	<!-- footer-section end -->

	@include('elements.script')

</body>
</html>