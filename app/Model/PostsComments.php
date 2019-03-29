<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostsComments extends Model
{
    //
	protected $table = 'posts_comment';

	/**
	 * @param string $table_id
	 * @return PostsComments
	 */
	public function setTable($table_id)
	{
		$this->table = $table_id;
		return $this;
	}
}
