@extends('master')

@section('content')
	<div>
		<p>{{ $post->title }}</p>
		<p>{{ $post->name }}</p>
		<div>
			{{ $post->body }}
		</div>
	</div>
	
	@include('comments', array('comments' => $comments, 'post_id' => $post_id))
@stop

