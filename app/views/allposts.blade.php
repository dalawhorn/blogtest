@extends('master')

@section('content')
	@if(isset($posts) && count($posts) > 0)
		@foreach($posts as $post)
			<div>
				<p><a href="post/{{ $post->id }}">{{ $post->title }}</a></p>
				<p>{{ $post->name }}</p>
				<div>
					{{ $post->body }}
				</div>
			</div>
		@endforeach
		<div>
			Filter Posts by Author
			@foreach($authors as $author)
				<div>
					{{ link_to('posts/author/'.$author->id, $author->name) }}
				</div>
			@endforeach
		</div>
		<div>
			{{ $posts->links() }}
		</div>
	@else
		<div>There are no posts to display.</div>
	@endif	
@stop

