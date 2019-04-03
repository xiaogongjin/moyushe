<?php

namespace App\Repositories;

use App\Model\PostsComments;

class PostsCommentsRepository
{
	use BaseRepository;

	protected $model;

	public function __construct(PostsComments $comments)
	{
		$this->model = $comments;
	}

	public function withUser()
	{
		$this->model = $this->model->with('user');
		return $this;
	}


	public function page($post_id,$number = 10, $sort = 'asc', $sortColumn = 'id')
	{
		return $this->model->where('posts_id',$post_id)->orderBy($sortColumn, $sort)->paginate($number);
	}


}