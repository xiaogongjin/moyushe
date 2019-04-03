<?php

namespace App\Http\Controllers;

use App\Repositories\PostsCommentsRepository;
use App\Repositories\PostsRepository;
use App\Repositories\VisitorRepository;
use Illuminate\Http\Request;

class PostsController extends Controller
{


	/**
	 * PostsController constructor.
	 * @param PostsRepository $posts
	 * @param PostsCommentsRepository $comments
	 * @param VisitorRepository $visitor
	 */
	public function __construct(PostsRepository $posts, PostsCommentsRepository $comments, VisitorRepository $visitor)
	{
		parent::__construct();
		$this->posts = $posts;
		$this->comments = $comments;
		$this->visitor = $visitor;
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$this->pageData['title'] = '首页';
		$posts = $this->posts->withUser()->page(config('posts.read.number'), config('posts.read.sort'), config('posts.read.sortColumn'));
		$this->pageData['posts'] = $posts;
		return view('posts',$this->pageData);
	}

	public function detail($posts_id)
	{
		$posts = $this->posts->withUser()->getFirstById($posts_id);
		$comments = $this->comments->withUser()->page($posts_id);
		$this->visitor->log($posts_id);
		$this->pageData['clicks'] = $this->visitor->getPostsClicks($posts_id);
		$this->pageData['posts'] = $posts;
		$this->pageData['comments'] = $comments;
		$this->pageData['title'] = $posts->title;
		return view('topic.detail',$this->pageData);
	}
}
