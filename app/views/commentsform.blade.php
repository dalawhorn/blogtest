@if(Auth::check())
	{{ Form::open(array('url' => 'comment/add')) }}
		{{ Form::textArea('comment') }}
		{{ Form::submit('Add Comment', array('class' => 'button small')) }}
		{{ Form::hidden('post_id', $post_id) }}
	{{ Form::close() }}
@else
	<div>Got something to say? {{ link_to('login', 'Login ') }} to comment.</div>
@endif