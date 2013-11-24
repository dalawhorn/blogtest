<?php

class Post extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
	
	protected $softDelete = true;
	
	//getPostWithAuthor method returns a single blog post with the author's name from the users table.
	public static function getPostWithAuthor($post_id) {
		return static::join('users', 'posts.author', '=', 'users.id')->where('posts.id', '=', $post_id)->select('posts.*', 'users.name');
	}
	
	//getAllPostsWithAuthor method returns all blog posts with the author's name from the users table.
	public static function getAllPostsWithAuthor() {
		return static::join('users', 'posts.author', '=', 'users.id')->orderBy('posts.created_at', 'desc')->select('posts.*', 'users.name');
	}
}