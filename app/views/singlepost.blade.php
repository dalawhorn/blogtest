@extends('master')

@section('content')
	<div class="row">
		<div class='small-12 columns'>
			<h1>{{ $post->title }}</h1>
			<div class="author_line">Posted by {{ link_to('posts/author/'.$post->author, $post->name) }} on {{ date('F j, Y g:i A', strtotime($post->created_at)) }}</div>
			<div>
				{{ $post->body }}
			</div>
		</div>
	</div>
	
	@include('comments', array('comments' => $comments, 'post_id' => $post_id))
@stop

