{{-- Comment list + form, shared by blog posts and campaigns. --}}
@php
	$comments = $subject ? $subject->comments()->approved()->whereNull('parent_id')->with('replies')->latest()->get() : collect();
@endphp

<div class="comment-section">
	<div class="comments m-b-50">
		<div class="details-title m-b-50">
			<h2>Comments ({{ str_pad($comments->count(), 2, '0', STR_PAD_LEFT) }})</h2>
		</div>

		@forelse ($comments as $comment)
			<div class="comment-wrap {{ $loop->last ? '' : 'm-b-40' }}">
				<div class="thumb">
					<img alt="thumb" src="{{ asset('assets/img/thumbs/thumb-125.webp') }}">
				</div>
				<div class="info">
					<div class="name">
						<p>{{ $comment->name }}</p>
					</div>
					<div class="date">
						<p>{{ $comment->created_at->format('F d, Y') }}</p>
					</div>
					<div class="text">
						<p>{{ $comment->message }}</p>
					</div>
				</div>
			</div>
		@empty
			<p>No comments yet. Be the first to leave one.</p>
		@endforelse
	</div>

	<div class="leave-comment m-b-60" id="comment-form">
		<div class="details-title m-b-30">
			<h2>Leave a Comment</h2>
		</div>

		@if (session('comment_success'))
			<div class="alert alert-success">{{ session('comment_success') }}</div>
		@endif
		@if ($errors->comment->any())
			<div class="alert alert-danger">
				<ul class="mb-0 ps-3">
					@foreach ($errors->comment->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if ($subject)
			<form method="POST" action="{{ route('comment.store', [$subjectType, $subject->id]) }}">
				@csrf
				<div class="info-input m-b-20">
					<input class="form-control" name="name" placeholder="Your Name" type="text"
						value="{{ old('name') }}" required>
					<input class="form-control" name="email" placeholder="Email Address" type="email"
						value="{{ old('email') }}" required>
				</div>
				<div class="m-b-20">
					<textarea class="form-control" name="message" placeholder="Say Something..." rows="4"
						required>{{ old('message') }}</textarea>
				</div>
				<button class="e-primary-btn has-icon" type="submit">
					Send Message
					<span class="icon-wrap"><span class="icon"><i class="fa-regular fa-arrow-right"></i> <i class="fa-regular fa-arrow-right"></i></span></span>
				</button>
			</form>
		@endif
	</div>
</div>
