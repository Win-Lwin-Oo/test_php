<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::all();

        // or view('articles.index')
        return view('articles/index',[
            'articles' => $data
        ]);
    }

    public function detail($id)
    {
        return "Controller - Article Detail - $id";
    }
}
