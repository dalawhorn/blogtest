<?php

class PostController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for front facing posts
	|--------------------------------------------------------------------------
	*/	
	
	public function allPosts() {
		//$posts = Post::all();
		//$posts = Post::getAllPostsWithAuthor()->get();
		$posts = Post::getAllPostsWithAuthor()->paginate(3);
		return View::make('allposts', array('posts' => $posts));
	}
	
	public function singlePost($id) {
		//$post = Post::find($id);
		$post = Post::getPostWithAuthor($id)->first();

		//$comments = Comment::where('post', '=', $id)->get();
		$comments = Comment::getCommentsWithUser($id)->get();
		return View::make('singlepost', array('post' => $post, 'post_id' => $id, 'comments' => $comments));
	}
}