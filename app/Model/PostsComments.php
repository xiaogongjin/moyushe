<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostsComments extends Model
{
    //
	protected $table = 'posts_comments';


	public function user()
	{
		return $this->belongsTo(User::class, 'user_id', 'id');
	}
}
