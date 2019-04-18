<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts;
use Illuminate\Http\Request;

class PostsNewController extends Controller
{
	/**
	 * PostsNewController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->middleware('auth');
	}

    //
	public function index()
	{
		$this->pageData['title'] = '发布新主题';
		return view('topic.new',$this->pageData);
	}

	public function create(Posts $posts)
	{

	}
}
