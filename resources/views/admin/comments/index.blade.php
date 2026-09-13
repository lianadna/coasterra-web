@extends('layout.admin')

@section('title', 'Comments')
@section('page-title', 'Comments')

@section('content')
	<div class="card radius-10">
		<div class="card-header bg-transparent">
			<div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
				<h6 class="mb-0">
					Comments
					@if ($pendingCount)
						<span class="badge bg-warning text-dark ms-1">{{ $pendingCount }} awaiting review</span>
					@endif
				</h6>
				<div class="btn-group btn-group-sm">
					<a href="{{ route('admin.comments.index') }}"
						class="btn btn-outline-secondary {{ $status === null ? 'active' : '' }}">All</a>
					<a href="{{ route('admin.comments.index', ['status' => 'pending']) }}"
						class="btn btn-outline-secondary {{ $status === 'pending' ? 'active' : '' }}">Pending</a>
					<a href="{{ route('admin.comments.index', ['status' => 'approved']) }}"
						class="btn btn-outline-secondary {{ $status === 'approved' ? 'active' : '' }}">Published</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<p class="text-secondary small">
				Comments left by visitors. Nothing appears on the website until you publish it,
				unless you switch on automatic publishing under Site Content.
			</p>
			<div class="table-responsive">
				<table class="table align-middle mb-0">
					<thead class="table-light">
						<tr>
							<th style="width: 60px;">#</th>
							<th>From</th>
							<th>On</th>
							<th>Comment</th>
							<th>Status</th>
							<th class="text-end" style="width: 150px;">Action</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($comments as $comment)
							<tr>
								<td>{{ $loop->iteration + ($comments->currentPage() - 1) * $comments->perPage() }}</td>
								<td>
									{{ $comment->name }}
									<div class="small text-secondary">{{ $comment->email }}</div>
								</td>
								<td class="small">{{ $comment->subject }}</td>
								<td>
									<div>{{ Str::limit($comment->message, 90) }}</div>
									<div class="small text-secondary">{{ $comment->created_at->format('d M Y H:i') }}</div>
								</td>
								<td>
									@if ($comment->status === 'approved')
										<span class="badge bg-success">Published</span>
									@else
										<span class="badge bg-warning text-dark">Pending</span>
									@endif
								</td>
								<td class="text-end text-nowrap">
									@if ($comment->status === 'pending')
										<form method="POST" action="{{ route('admin.comments.approve', $comment) }}" class="d-inline">
											@csrf
											@method('PUT')
											<button type="submit" class="btn btn-sm btn-outline-success" title="Publish">
												<i class="bi bi-check-lg"></i>
											</button>
										</form>
									@else
										<form method="POST" action="{{ route('admin.comments.unapprove', $comment) }}" class="d-inline">
											@csrf
											@method('PUT')
											<button type="submit" class="btn btn-sm btn-outline-secondary" title="Hide">
												<i class="bi bi-eye-slash"></i>
											</button>
										</form>
									@endif
									<form method="POST" action="{{ route('admin.comments.destroy', $comment) }}" class="d-inline"
										onsubmit="return confirm('Delete this comment?');">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
									</form>
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="6" class="text-center text-muted py-4">No comments yet.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
			</div>
			@if ($comments->hasPages())
				<div class="mt-3">{{ $comments->links() }}</div>
			@endif
		</div>
	</div>
@endsection
