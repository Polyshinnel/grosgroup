<?php

namespace App\Http\Controllers\Pages\Article;

use App\Http\Controllers\BasePageController;
use App\Http\Controllers\Controller;
use App\Service\ArticleService;
use Illuminate\Http\Request;

class ArticlePageController extends BasePageController
{
    private ArticleService $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $pageInfo = $this->getPageInfo($request);
        $articles = $this->service->getArticles();
        return view('commonPages.Articles.Articles', ['pageInfo' => $pageInfo, 'articles' => $articles]);
    }
}
