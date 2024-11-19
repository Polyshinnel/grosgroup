<?php

namespace App\Repository;

use App\Models\Article;
use Illuminate\Database\Eloquent\Collection;

class ArticleRepository
{
    public function getArticles(): ?Collection
    {
        return Article::all();
    }

    public function getArticleById(int $id): Article
    {
        return Article::find($id);
    }
}
