<?php

namespace App\Repositories;

use App\Repositories\ResourceRepository;
use App\Models\Article;

class ArticleRepository extends ResourceRepository{

    public function __construct(Article $article) {
        $this->model = $article;
    }
}