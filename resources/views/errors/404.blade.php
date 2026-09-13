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
        <!-- Error Section Start -->
        <section class="error-section pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="error-content">
                            <h1 class="error-title">{{ $status ?? 404 }}</h1>
                            @if(($status ?? 404) == 404)
                                <h2 class="error-subtitle">Oops! Page Not Found</h2>
                                <p class="error-description">
                                    The page you're looking for doesn't exist or has been moved.
                                    Don't worry, let's get you back on track.
                                </p>
                            @else
                                <h2 class="error-subtitle">Oops! Something went wrong</h2>
                                <p class="error-description">
                                    We're experiencing some technical difficulties.
                                    Please try again later or contact support if the problem persists.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Error Section End -->
	</main>

	<!-- footer-section start -->
	@include('elements.footer')
	<!-- footer-section end -->

	@include('elements.script')

</body>
</html>
