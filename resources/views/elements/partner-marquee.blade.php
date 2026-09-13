@php
	// The marquee needs the same list twice so the scroll loops seamlessly.
	$marqueeLogos = ($partners ?? collect())->isNotEmpty()
		? $partners
		: collect(range(1, 6))->map(fn () => null);
@endphp
@for ($pass = 0; $pass < 2; $pass++)
	<div class="partner-marquee-layout">
		@foreach ($marqueeLogos as $partner)
			<div class="partner-1">
				<img alt="{{ $partner?->name ?? 'partner-logo' }}"
					src="{{ $partner?->image ? Storage::url($partner->image) : asset('assets/img/logo/logo-pulau-kelapa.svg') }}">
			</div>
		@endforeach
	</div>
@endfor
