<?php

class PostController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for front facing posts
	|--------------------------------------------------------------------------
	*/	
	
	public function allPosts() {
		$posts = Post::getAllPostsWithAuthor()->paginate(3);
		$authors = User::whereRaw('type = "admin" or type = "author"')->orderBy('name', 'asc')->get();
		
		return View::make('allposts', array('posts' => $posts, 'authors' => $authors));
	}
	
	public function singlePost($id) {
		$post = Post::getPostWithAuthor($id)->first();
		$comments = Comment::getCommentsWithUser($id)->get();
		
		return View::make('singlepost', array('post' => $post, 'post_id' => $id, 'comments' => $comments));
	}
	
	public function postsByAuthor($id) {
		$posts = Post::getAllPostsWithAuthor($id)->paginate(3);
		$authors = User::whereRaw('type = "admin" or type = "author"')->orderBy('name', 'asc')->get();
		
		return View::make('allposts', array('posts' => $posts, 'authors' => $authors));
	}
	
	public function jsonFeed() {
		$posts = Post::getAllPostsWithAuthor()->get();
		$posts_array = array();
		
		$count = 0;
		foreach($posts as $post) {
			$posts_array[$count]['title'] = $post->title;
			$posts_array[$count]['author'] = $post->name;
			$posts_array[$count]['date_posted'] = (string)$post->created_at;
			$posts_array[$count]['url'] = url('post/'.$post->id);
			preg_match('|<p[^>]*>([^<]*)</p>|', $post->body, $matches);
			$posts_array[$count]['post_preview'] = $matches[1];
			$count++;
		}
		
		//echo "<pre>";
		//print_r($posts_array);
		//exit;
		
		return Response::json($posts_array);
	}
}