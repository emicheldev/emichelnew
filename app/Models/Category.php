<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;

    //mass assignment all field
    protected $guarded = [];

    //hasMany ke table atau Model article
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
