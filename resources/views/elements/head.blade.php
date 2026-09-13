<head>
	<!-- Required meta tags -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	@php
		$pageTitle = trim($__env->yieldContent('title', 'Coasterra | Coastal Climate Solutions'));
		$pageDescription = trim($__env->yieldContent(
			'meta_description',
			'Coasterra menghadirkan solusi berbasis alam untuk mendukung keberlanjutan kawasan pesisir Indonesia.'
		));
		$ogTitle = trim($__env->yieldContent('og_title', $pageTitle));
		$ogDescription = trim($__env->yieldContent('og_description', $pageDescription));
		$ogImage = trim($__env->yieldContent('og_image', asset('assets/img/template/people.png')));
		$ogUrl = trim($__env->yieldContent('og_url', url()->current()));
	@endphp

	<title>{{ $pageTitle }}</title>
	<meta name="description" content="{{ $pageDescription }}"/>

	<!-- Open Graph -->
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="{{ $ogTitle }}"/>
	<meta property="og:description" content="{{ $ogDescription }}"/>
	<meta property="og:image" content="{{ $ogImage }}"/>
	<meta property="og:url" content="{{ $ogUrl }}"/>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/template/favicon.svg') }}"/>

	<!-- Google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Outfit:wght@100..900&display=swap" rel="stylesheet"/>

	<!-- Vendors Css -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-pro/fontawesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/vendor/fancybox/fancybox.css') }}"/>

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
</head>