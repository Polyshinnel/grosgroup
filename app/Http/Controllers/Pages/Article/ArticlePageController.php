<?php

namespace App\Http\Controllers\Pages\Article;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlePageController extends BasePageController
{
    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        return view('commonPages.Articles.Articles', ['pageInfo' => $pageInfo]);
    }
}
