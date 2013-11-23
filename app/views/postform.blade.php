@extends('master')

@section('content')
	@if($function == 'edit' && $id > 0)
		{{ Form::model($post, array('url' => 'admin/update-post')) }}
		{{ Form::hidden('id', $id) }}
	@else
		{{ Form::open(array('url' => 'admin/add-post')) }}
	@endif
	
		{{ Form::text('title', null, array('placeholder' => 'Title')) }}
		{{ Form::textArea('body', null, array('id' => 'post_body')) }}
		{{ Form::submit('Publish', array('class' => 'button')) }}
	{{ Form::close() }}
@stop

@section('footerjs')
	@parent
	
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('ckeditor/adapters/jquery.js') }}"></script>
	<script>
		$('#post_body').ckeditor();
	</script>
@stop

