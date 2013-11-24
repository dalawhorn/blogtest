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
}