<?php

namespace App\Http\Controllers\Pages\Article;

use App\Http\Controllers\Controller;
use App\Service\ArticleService;

class ArticlePageItemController extends Controller
{
    private ArticleService $service;

    public function __construct(ArticleService $service)
    {
        $this->service = $service;
    }

    public function __invoke(int $article)
    {
        $article = $this->service->getArticleById($article);
        $currentUrl = url()->current();
        $article['page_info']['canonical'] = $currentUrl;
        return view('commonPages.Articles.ArticlesItem', ['pageInfo' => $article['page_info'], 'html' => $article['html']]);
    }
}
