<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
	protected $table = 'posts';

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	public function lastCommentUser()
	{
		return $this->belongsTo(User::class, 'last_comments_user_id', 'id');
	}
}
