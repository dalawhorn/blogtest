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
	//Optional author_id parameter will query for all posts for an author
	public static function getAllPostsWithAuthor($author_id = false) {
		if($author_id) {
			return static::join('users', 'posts.author', '=', 'users.id')->where('author', '=', $author_id)->orderBy('posts.created_at', 'desc')->select('posts.*', 'users.name');
		}
		else {
			return static::join('users', 'posts.author', '=', 'users.id')->orderBy('posts.created_at', 'desc')->select('posts.*', 'users.name');
		}
	}
}