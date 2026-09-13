<!-- breadcrumb-section start -->
<section class="breadcrumb-section">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-xl-6 col-lg-6">
                <div class="breadcrumb-content" style="background-image: url(assets/img/template/service-head1.png)">
                    <div class="breadcrumb-nav" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="#">{{ $title }}</a></li>
                        </ul>
                    </div>
                    <div class="breadcrumb-title" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <h2>{{ $subTitle }}</h2>
                    </div>
                    <div class="shape-1">
                        <img src="{{ asset('assets/img/shapes/shape-1.webp') }}" alt="shape" />
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 d-none d-lg-block">
                <div class="breadcrumb-thumb">
                    <img src="{{ asset('assets/img/template/service-head2.png') }}" alt="thumb" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-section end -->