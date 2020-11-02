<?php

namespace App\Repositories;

interface ArticleRepositoryInterface
{
    
    /**
     * get
     *
     * @param  mixed $article_id
     * @return void
     */
    public function get($article_id );
    
    /**
     * all
     *
     * @return void
     */
    public function all();
    
    /**
     * delete
     *
     * @param  mixed $article_id
     * @return void
     */
    public function delete($article_id);
    
    /**
     * update
     *
     * @param  mixed $article_id
     * @param  mixed $article_data
     * @return void
     */
    public function update($article_id, array $article_data);

}