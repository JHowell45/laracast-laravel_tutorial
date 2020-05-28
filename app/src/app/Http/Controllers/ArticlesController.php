<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

	public function index()
	{
		return view('articles.index', ['articles' => Article::latest()->get()]);
	}

	public function show($id)
	{
		$article = Article::find($id);

		return view('articles.show', ['article' => $article]);
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store()
	{
		die('hello');
	}
}
