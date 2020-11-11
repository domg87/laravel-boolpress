<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $articles = Article::where('user_id', $user_id)->get();

        return view('guest.posts.index', compact('articles'));
    }


}
