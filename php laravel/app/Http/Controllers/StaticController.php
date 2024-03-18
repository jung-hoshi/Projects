<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('static/index')->with('articles', $articles);

    }

    public function about() {
        return view('static/about');

    }
}
