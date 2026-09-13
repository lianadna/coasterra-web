@php
	$value = $record->{$field['name']};
@endphp

@switch($field['type'])
	@case('image')
		@if ($value)
			<img src="{{ Storage::url($value) }}" alt="" class="rounded" width="52" height="52" style="object-fit: cover;">
		@else
			<span class="text-muted small">&mdash;</span>
		@endif
		@break

	@case('select')
		@if (isset($field['relation']))
			@php $related = $record->{$field['relation']['name']} ?? null; @endphp
			{{ $related?->{$field['relation']['label']} ?? '—' }}
		@elseif ($value)
			<span class="badge bg-light text-dark text-uppercase">{{ $value }}</span>
		@else
			<span class="text-muted small">&mdash;</span>
		@endif
		@break

	@case('textarea')
		<span class="text-muted">{{ Str::limit(strip_tags((string) $value), 70) ?: '—' }}</span>
		@break

	@case('datetime')
		{{ $value ? $value->format('d M Y H:i') : '—' }}
		@break

	@case('date')
		{{ $value ? $value->format('d M Y') : '—' }}
		@break

	@case('money')
		{{ $value !== null ? 'Rp '.number_format((float) $value, 0, ',', '.') : '—' }}
		@break

	@case('url')
		@if ($value)
			<a href="{{ $value }}" target="_blank" rel="noopener">{{ Str::limit($value, 30) }}</a>
		@else
			<span class="text-muted small">&mdash;</span>
		@endif
		@break

	@default
		{{ $value !== null && $value !== '' ? $value : '—' }}
@endswitch
