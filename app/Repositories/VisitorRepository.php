<?php

namespace App\Repositories;

use App\Model\PostsVisitor;
use App\Services\IP;

class VisitorRepository
{
    use BaseRepository;

    /**
     * @var $model
     */
    protected $model;

    /**
     * @var IP
     */
    protected $ip;


	/**
	 * VisitorRepository constructor.
	 * @param PostsVisitor $visitor
	 * @param IP $ip
	 */
	public function __construct(PostsVisitor $visitor, IP $ip)
    {
        $this->model = $visitor->with('posts');

        $this->ip = $ip;
    }

    /**
     * Update or create the record of visitors table
     *
     * @param $posts_id
     */
    public function log($posts_id)
    {
        $ip = $this->ip->get();

        if ($this->hasArticleIp($posts_id, $ip)) {

            $this->model->where('posts_id', $posts_id)
                        ->where('ip', $ip)
                        ->increment('clicks');

        } else {
            $data = [
                'ip'		    => $ip,
                'posts_id'    => $posts_id,
                'clicks' 	    => 1
            ];
            $this->model->firstOrCreate( $data );
        }
    }

    /**
     * Check the record by article id and ip if it exists.
     *
     * @param $posts_id
     * @param $ip
     * @return bool
     */
    public function hasArticleIp($posts_id, $ip)
    {
        return $this->model
                    ->where('posts_id', $posts_id)
                    ->where('ip', $ip)
                    ->count() ? true : false;
    }

    /**
     * Get all the clicks.
     * 
     * @return int
     */
    public function getAllClicks()
    {
        return $this->model->sum('clicks');
    }

	public function getPostsClicks($posts_id)
	{
		return $this->model->where('posts_id',$posts_id)->sum('clicks');
	}

}
