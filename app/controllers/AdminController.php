<?php

class AdminController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for the Admin Area
	|--------------------------------------------------------------------------
	*/	
	
	public function viewPosts() {
		$posts = Post::all();
		return View::make('adminviewposts', array('posts' => $posts));
	}
	
	public function newPost() {
		return View::make('postform');
	}
	
	public function addPost() {
		$post = new Post;
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->author = Auth::user()->id;
		$result = $post->save();
		return Redirect::to('admin/view-posts');
	}
	
	public function editPost($id) {
		$post = Post::find($id);
		return View::make('postform', array('function' => 'edit', 'id' => $id, 'post' => $post));
	}
	
	public function updatePost() {
		$id = Input::get('id');
		$title = Input::get('title');
		$body = Input::get('body');
		
		$post = Post::find($id);
		$post->title = $title;
		$post->body = $body;
		
		$post->save(); 
		return Redirect::to('admin/view-posts');
	}
	
	public function deletePost($id) {
		$post = Post::find($id);
		$post->delete();
		return Redirect::to('admin/view-posts');
	}
}