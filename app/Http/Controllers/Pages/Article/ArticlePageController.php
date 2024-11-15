<?php

namespace App\Http\Controllers\Pages\Article;

use App\Http\Controllers\Controller;

class ArticlePageController extends Controller
{
    public function __invoke()
    {
        return view('commonPages.Articles.Articles');
    }
}
