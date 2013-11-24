<?php

class Comment extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';
	
	protected $softDelete = true;
	
	//getCommentsWithUser method returns all comments for a post with the writers name from the users table.
	public static function getCommentsWithUser($post_id) {
		return static::join('users', 'comments.user', '=', 'users.id')->orderBy('comments.created_at', 'desc')->where('comments.post', '=', $post_id)->select('comments.*', 'users.name');
	}
	
	public static function addComment($comment_text, $user_id, $post_id) {
		$comment = new Comment;
		$comment->comment = $comment_text;
		$comment->user = $user_id;
		$comment->post = $post_id;
		
		return $comment->save();
	}
}