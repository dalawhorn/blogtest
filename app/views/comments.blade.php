<div class='row'>
	<div class='small-12 columns'>
		@include('commentsform', array('post_id' => $post_id))
		
		@if(count($comments) > 0)
			@foreach($comments as $comment)
				<div class="panel">
					<h5>{{ $comment->name }}</h5> 
					<div class="author_line">{{ date("F j, Y g:i A", strtotime($comment->created_at)) }}</div>
					<p>{{ $comment->comment }}</p>
				</div>
			@endforeach
		@else
			<div class="panel">
				No comments for this post.
			</div>
		@endif
	</div>
</div>
