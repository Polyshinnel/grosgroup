<?php

namespace App\Service;

use App\Repository\ArticleRepository;
use App\Utils\UtilsClass;

class ArticleService
{
    private ArticleRepository $articleRepository;
    private UtilsClass $utilsClass;
    public function __construct(ArticleRepository $articleRepository, UtilsClass $utilsClass)
    {
        $this->articleRepository = $articleRepository;
        $this->utilsClass = $utilsClass;
    }

    public function getArticles(): array
    {
        $articles = $this->articleRepository->getArticles();
        $formattedArticles = [];
        if(!$articles->isEmpty()) {
            foreach ($articles as $article) {
                $formattedArticles[] = [
                    'id' => $article->id,
                    'title' => $article->title,
                    'description' => $article->description,
                    'thumbnail' => $article->thumbnail,
                    'date' => $this->utilsClass->reformatDate($article->date, 'ru'),
                ];
            }
        }

        return $formattedArticles;
    }

    public function getArticleById(int $id): array
    {
        return $this->articleRepository->getArticleById($id)->toArray();
    }
}
