<?php

class CommentController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Controller for comments
	|--------------------------------------------------------------------------
	*/	
	
	public function addComment() {
		$comment = Input::get('comment');
		$post = Input::get('post_id');
		$user = Auth::user()->id;
		
		Comment::addComment($comment, $user, $post);
		return Redirect::to('post/'.$post);
	}
}