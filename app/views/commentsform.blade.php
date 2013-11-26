@if(Auth::check())
	<div class="panel">
		<h5>Let your voice be heard!</h5>
		{{ Form::open(array('url' => 'comment/add')) }}
			{{ Form::textArea('comment') }}
			{{ Form::submit('Add Comment', array('class' => 'button small')) }}
			{{ Form::hidden('post_id', $post_id) }}
		{{ Form::close() }}
	</div>
@else
	<div class="panel">
		<h5>Got something to say?</h5> 
		<p>{{ link_to('login', 'Login ') }} to comment.</p>
	</div>
@endif