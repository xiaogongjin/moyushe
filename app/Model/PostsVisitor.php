<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostsVisitor extends Model
{
	//
	protected $table = 'posts_visitor';

	protected $fillable = [
		'ip','posts_id','clicks'
	];
	public function posts()
	{
		return $this->belongsTo(Posts::class, 'id', 'posts_id');
	}

}
