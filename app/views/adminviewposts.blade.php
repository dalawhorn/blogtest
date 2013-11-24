@extends('master')

@section('content')
	<a href="new-post" class="button small">New Post</a>
	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>Date Posted</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>{{ link_to('post/'.$post->id, $post->title) }}</td>
					<td>{{ $post->created_at }}</td>
					<td><a href='edit-post/{{ $post->id }}'>Edit</a></td>
					<td><a href='delete-post/{{ $post->id }}'>Delete</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop