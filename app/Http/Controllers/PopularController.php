<?php

namespace App\Http\Controllers;

use App\Repositories\PostsRepository;
use Illuminate\Http\Request;

class PopularController extends Controller
{

	/**
	 * HomeController constructor.
	 * @param PostsRepository $posts
	 */
	public function __construct(PostsRepository $posts)
	{
		parent::__construct();
		$this->posts = $posts;
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$this->pageData['title'] = '时下流行';
		$posts = $this->posts->withUser()->page(config('posts.read.number'), config('posts.read.sort'), config('posts.read.sortColumn'));
		$this->pageData['posts'] = $posts;
		return view('popular',$this->pageData);
	}
}
