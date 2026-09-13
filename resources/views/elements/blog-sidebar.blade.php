{{-- Blog sidebar: search, recent posts and categories, all from the database. --}}
@php
	$searchAction = $searchAction ?? route('blogStandard');
	$search = $search ?? '';
	$activeCategory = $activeCategory ?? null;
	$recentPosts = $recentPosts ?? collect();
	$categories = $categories ?? collect();
@endphp

<div class="s-widget-wrap m-b-30">
	<div class="w-title">
		<h3>Search Here</h3>
		<div class="bar-wrap">
			<div class="bar-1"></div>
			<div class="bar-2"></div>
		</div>
	</div>
	<form method="GET" action="{{ $searchAction }}">
		<div class="search-bar">
			<input type="text" name="q" value="{{ $search }}" placeholder="Search Type.." />
			<button type="submit" class="border-0 bg-transparent p-0">
				<i class="fa-solid fa-magnifying-glass"></i>
			</button>
		</div>
	</form>
	@if ($categories->isNotEmpty())
		<div class="categories">
			@foreach ($categories->take(3) as $category)
				<a href="{{ $searchAction }}?category={{ $category->id }}">
					<button type="button">{{ $category->title }}</button>
				</a>
			@endforeach
		</div>
	@endif
</div>

<div class="s-widget-wrap m-b-30">
	<div class="w-title">
		<h3>Recent Posts</h3>
		<div class="bar-wrap">
			<div class="bar-1"></div>
			<div class="bar-2"></div>
		</div>
	</div>
	<div class="recent-campaigns">
		@forelse ($recentPosts as $recent)
			<div class="campaign {{ $loop->last ? 'campaign-last' : '' }}">
				<div class="thumb">
					<img alt="{{ $recent->title }}"
						src="{{ $recent->image ? Storage::url($recent->image) : asset('assets/img/thumbs/thumb-121.webp') }}">
				</div>
				<div>
					<div class="date">
						<p>
							@if ($recent->category)
								{{ $recent->category->title }} -
							@endif
							{{ $recent->created_at->format('M d, Y') }}
						</p>
					</div>
					<div class="name">
						<a href="{{ route('blogDetails', $recent) }}">
							<h5>{{ Str::limit($recent->title, 45) }}</h5>
						</a>
					</div>
				</div>
			</div>
		@empty
			<p>No posts yet.</p>
		@endforelse
	</div>
</div>

<div class="s-widget-wrap m-b-30">
	<div class="w-title">
		<h3>Categories</h3>
		<div class="bar-wrap">
			<div class="bar-1"></div>
			<div class="bar-2"></div>
		</div>
	</div>
	<div class="detail-list">
		<ul>
			@forelse ($categories as $category)
				<li>
					<a href="{{ $searchAction }}?category={{ $category->id }}"
						class="{{ (int) $activeCategory === $category->id ? 'active' : '' }}">
						{{ $category->title }} ({{ $category->blogs_count ?? 0 }})
						<span class="icon"><i class="fa-regular fa-arrow-up-right"></i></span>
					</a>
				</li>
			@empty
				<li><a href="{{ $searchAction }}">No categories yet</a></li>
			@endforelse
		</ul>
	</div>
</div>
