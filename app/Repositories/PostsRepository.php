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
}