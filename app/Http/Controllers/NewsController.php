<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();

        return view('front.news', compact('news'));
    }

    public function news($slug)
    {
        $newsOne = News::whereSlug($slug)->first();
        return view('front.news-one', compact('newsOne'));
    }
}
