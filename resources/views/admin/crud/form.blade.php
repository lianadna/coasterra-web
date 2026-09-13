@extends('layout.admin')

@section('title', ($record ? 'Edit ' : 'Add ').$label)
@section('page-title', ($record ? 'Edit ' : 'Add ').$label)

@section('page-actions')
	<a href="{{ route($route.'.index') }}" class="btn btn-outline-secondary">
		<i class="bi bi-arrow-left me-1"></i> Back
	</a>
@endsection

@section('content')
	<div class="row">
		<div class="col-12 col-xl-8">
			<div class="card radius-10">
				<div class="card-body">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul class="mb-0 ps-3">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form method="POST" enctype="multipart/form-data" class="row g-3"
						action="{{ $record ? route($route.'.update', $record->id) : route($route.'.store') }}">
						@csrf
						@if ($record)
							@method('PUT')
						@endif

						@foreach ($fields as $field)
							@php
								$name = $field['name'];
								$value = old($name, $record?->{$name});
								$required = in_array('required', $field['rules'] ?? [], true) && $field['type'] !== 'image';
							@endphp

							<div class="col-12 {{ $field['half'] ?? false ? 'col-md-6' : '' }}">
								<label for="{{ $name }}" class="form-label">
									{{ $field['label'] }}
									@if ($required)
										<span class="text-danger">*</span>
									@endif
								</label>

								@switch($field['type'])
									@case('textarea')
										<textarea class="form-control @error($name) is-invalid @enderror" id="{{ $name }}"
											name="{{ $name }}" rows="{{ $field['rows'] ?? 4 }}"
											@if ($required) required @endif>{{ $value }}</textarea>
										@break

									@case('select')
										<select class="form-select @error($name) is-invalid @enderror" id="{{ $name }}"
											name="{{ $name }}" @if ($required) required @endif>
											@if (! $required || isset($field['relation']))
												<option value="">{{ $field['placeholder'] ?? '— none —' }}</option>
											@endif
											@foreach ($field['options'] ?? [] as $optionValue => $optionLabel)
												<option value="{{ $optionValue }}" @selected((string) $value === (string) $optionValue)>
													{{ $optionLabel }}
												</option>
											@endforeach
										</select>
										@break

									@case('image')
										@if ($record && $record->{$name})
											<div class="mb-2">
												<img src="{{ Storage::url($record->{$name}) }}" alt=""
													class="rounded border" style="max-height: 120px;">
											</div>
										@endif
										<input type="file" accept="image/*"
											class="form-control @error($name) is-invalid @enderror"
											id="{{ $name }}" name="{{ $name }}">
										<div class="form-text">
											JPG/PNG/WebP, max 4 MB.
											@if ($record && $record->{$name})
												Leave empty to keep the current image.
											@endif
										</div>
										@break

									@case('datetime')
										<input type="datetime-local" class="form-control @error($name) is-invalid @enderror"
											id="{{ $name }}" name="{{ $name }}"
											value="{{ $value instanceof \Carbon\CarbonInterface ? $value->format('Y-m-d\TH:i') : $value }}"
											@if ($required) required @endif>
										@break

									@case('date')
										<input type="date" class="form-control @error($name) is-invalid @enderror"
											id="{{ $name }}" name="{{ $name }}"
											value="{{ $value instanceof \Carbon\CarbonInterface ? $value->format('Y-m-d') : $value }}"
											@if ($required) required @endif>
										@break

									@case('number')
									@case('money')
										<input type="number" step="{{ $field['step'] ?? 1 }}"
											class="form-control @error($name) is-invalid @enderror"
											id="{{ $name }}" name="{{ $name }}" value="{{ $value }}"
											@if ($required) required @endif>
										@break

									@default
										<input type="{{ $field['type'] === 'email' ? 'email' : ($field['type'] === 'url' ? 'url' : 'text') }}"
											class="form-control @error($name) is-invalid @enderror"
											id="{{ $name }}" name="{{ $name }}" value="{{ $value }}"
											placeholder="{{ $field['placeholder'] ?? '' }}"
											@if ($required) required @endif>
								@endswitch

								@if (! empty($field['help']))
									<div class="form-text">{{ $field['help'] }}</div>
								@endif

								@error($name)
									<div class="invalid-feedback d-block">{{ $message }}</div>
								@enderror
							</div>
						@endforeach

						<div class="col-12 d-flex gap-2">
							<button type="submit" class="btn btn-primary">
								<i class="bi bi-check-lg me-1"></i> {{ $record ? 'Save Changes' : 'Create '.$label }}
							</button>
							<a href="{{ route($route.'.index') }}" class="btn btn-light">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
