@include('commentsform', array('post_id' => $post_id))

@if(count($comments) > 0)
	@foreach($comments as $comment)
		<div>
			<div>{{ $comment->name }}</div>
			<div>{{ $comment->created_at }}</div>
			<div>{{ $comment->comment }}</div>
		</div>
	@endforeach
@else
	<div>
		No comments for this post.
	</div>
@endif
