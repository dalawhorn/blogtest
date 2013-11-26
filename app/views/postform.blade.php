@extends('master')

@section('content')
	<div class="row">
		<div class="small-10 columns small-centered">
			@if(isset($function) && $function == 'edit' && $id > 0)
				{{ Form::model($post, array('url' => 'admin/update-post')) }}
				{{ Form::hidden('id', $id) }}
			@else
				{{ Form::open(array('url' => 'admin/add-post')) }}
			@endif
			
				{{ Form::text('title', null, array('placeholder' => 'Title')) }}
				{{ Form::textArea('body', null, array('id' => 'post_body')) }}
				{{ Form::submit('Save', array('class' => 'button')) }}
				{{ link_to('admin/view-posts', 'Cancel') }}
			{{ Form::close() }}
		</div>
	</div>
@stop

@section('footerjs')
	@parent
	
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('ckeditor/adapters/jquery.js') }}"></script>
	<script>
		$('#post_body').ckeditor();
	</script>
@stop

