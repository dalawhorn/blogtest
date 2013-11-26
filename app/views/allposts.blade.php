@extends('master')

@section('content')
	@if(isset($posts) && count($posts) > 0)
		<div class="row">
			<div class="small-12 large-9 columns">
				@foreach($posts as $post)
					<?php
					preg_match('|<p[^>]*>([^<]*)</p>|', $post->body, $matches);
					$post_preview = $matches[1];
					?>
					<div>
						<h3>{{ link_to("post/".$post->id,  $post->title) }}</a></h3>
						<div class="author_line">Posted by {{ link_to('posts/author/'.$post->author, $post->name) }} on {{ date('F j, Y g:i A', strtotime($post->created_at)) }}</div>
						<!-- <div> -->
							<p>{{ $post_preview }} {{ link_to("post/".$post->id, "Continue Reading...") }}</p>
						<!-- </div> -->
					</div>
				@endforeach
			</div>
			<div class="small-12 large-3 columns">
				<h4>Filter Posts by Author</h4>
				<ul>
				@foreach($authors as $author)
					<li>
						{{ link_to('posts/author/'.$author->id, $author->name) }}
					</li>
				@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			{{ $posts->links() }}
		</div>
	@else
		<div>There are no posts to display.</div>
	@endif	
@stop

