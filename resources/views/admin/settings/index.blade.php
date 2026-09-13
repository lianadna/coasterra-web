@extends('layout.admin')

@section('title', 'Site Content')
@section('page-title', 'Site Content')

@section('content')
	<form method="POST" action="{{ route('admin.settings.update') }}">
		@csrf
		@method('PUT')

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul class="mb-0 ps-3">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<div class="row">
			<div class="col-12 col-xl-9">
				@foreach ($groups as $groupName => $settings)
					<div class="card radius-10 mb-3">
						<div class="card-header bg-transparent">
							<h6 class="mb-0 text-capitalize">{{ str_replace('_', ' ', $groupName) }}</h6>
						</div>
						<div class="card-body row g-3">
							@foreach ($settings as $setting)
								@php $name = 'values['.$setting->key.']'; @endphp
								<div class="col-12 {{ in_array($setting->type, ['text', 'number'], true) ? 'col-md-6' : '' }}">
									@if ($setting->type === 'boolean')
										<div class="form-check form-switch">
											<input type="hidden" name="{{ $name }}" value="0">
											<input class="form-check-input" type="checkbox" id="s-{{ $setting->key }}"
												name="{{ $name }}" value="1" @checked(old('values.'.$setting->key, $setting->value) == '1')>
											<label class="form-check-label" for="s-{{ $setting->key }}">{{ $setting->label }}</label>
										</div>
									@else
										<label for="s-{{ $setting->key }}" class="form-label">{{ $setting->label }}</label>
										@if ($setting->type === 'textarea')
											<textarea class="form-control @error('values.'.$setting->key) is-invalid @enderror"
												id="s-{{ $setting->key }}" name="{{ $name }}" rows="5">{{ old('values.'.$setting->key, $setting->value) }}</textarea>
										@else
											<input type="{{ $setting->type === 'number' ? 'number' : 'text' }}"
												class="form-control @error('values.'.$setting->key) is-invalid @enderror"
												id="s-{{ $setting->key }}" name="{{ $name }}"
												value="{{ old('values.'.$setting->key, $setting->value) }}">
										@endif
									@endif

									@if ($setting->help)
										<div class="form-text">{{ $setting->help }}</div>
									@endif
									@error('values.'.$setting->key)
										<div class="invalid-feedback d-block">{{ $message }}</div>
									@enderror
								</div>
							@endforeach
						</div>
					</div>
				@endforeach

				<button type="submit" class="btn btn-primary mb-4">
					<i class="bi bi-check-lg me-1"></i> Save Changes
				</button>
			</div>
		</div>
	</form>
@endsection
