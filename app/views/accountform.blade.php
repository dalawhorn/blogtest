@extends('master')

@section('content')
	<h1>Create Account</h1>
	{{ Form::open(array('url' => 'account/add')) }}
		<div class="input-wrapper">
			{{ Form::text('name', null, array('placeholder' => 'Name')) }}
			{{ $errors->first('name', '<small class="error">:message</small>') }}
		</div>
		<div class="input-wrapper">
			{{ Form::email('email', null, array('placeholder' => 'Email')) }}
			{{ $errors->first('email', '<small class="error">:message</small>') }}
		</div>
		<div class="input-wrapper">
			{{ Form::text('username', null, array('placeholder' => 'Username')) }}
			{{ $errors->first('username', '<small class="error">:message</small>') }}
		</div>
		<div class="input-wrapper">
			{{ Form::password('password', array('placeholder' => 'Password')) }}
			{{ $errors->first('password', '<small class="error">:message</small>') }}
		</div>
		<div class="input-wrapper">
			{{ Form::password('password_confirm', array('placeholder' => 'Confirm Password')) }}
			{{ $errors->first('password_confirm', '<small class="error">:message</small>') }}
		</div>
		{{ Form::submit('Submit', array('class' => 'button')) }}
	{{ Form::close() }}
@stop