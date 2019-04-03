<?php

namespace App\Repositories;

use App\Model\Posts;

class PostsRepository
{
	use BaseRepository;

	protected $model;

	public function __construct(Posts $posts)
	{
		$this->model = $posts;
	}

	public function withUser()
	{
		$this->model = $this->model->with('user')->with('lastCommentUser');
		return $this;
	}

	public function getFirstById($id)
	{
		return $this->model->where('id', $id)->first();
	}

	public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
	{
		return $this->model->orderBy($sortColumn, $sort)->paginate($number);
	}


}