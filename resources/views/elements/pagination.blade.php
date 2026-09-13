{{-- Pagination styled to match the template's own markup. --}}
@if ($paginator->hasPages())
	<div class="project-pagination">
		<ul>
			@if (! $paginator->onFirstPage())
				<li class="icon">
					<a href="{{ $paginator->previousPageUrl() }}"><i class="fa-regular fa-arrow-left"></i></a>
				</li>
			@endif

			@foreach ($paginator->getUrlRange(1, $paginator->lastPage()) as $page => $url)
				<li class="{{ $page === $paginator->currentPage() ? 'active' : '' }}">
					<a href="{{ $url }}">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</a>
				</li>
			@endforeach

			@if ($paginator->hasMorePages())
				<li class="icon">
					<a href="{{ $paginator->nextPageUrl() }}"><i class="fa-regular fa-arrow-right"></i></a>
				</li>
			@endif
		</ul>
	</div>
@endif
