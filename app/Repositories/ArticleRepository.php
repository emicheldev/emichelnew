<?php

namespace App\Repositories;

use App\Http\Requests;
use App\Models\Category;
use App\User;


use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface
{
    public function get( $article_id)
    {
        return Article::find($article_id);
    }

    public function all()
    {
        return Article::with('author','category');
    }

    public function delete($article_id)
    {
       return Article::destroy($article_id);
    }

   public function update($article_id, array $article_data)
   {
       Article::find($article_id)->update($article_data);
   }

        
}