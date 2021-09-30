<?php

namespace App\Models;

use App\User;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    use  HasFactory;
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title','slug','description','content','image','online','author_id','category_id',
    ];
        
    /**
     * author
     *
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }
    
    //belongsTo table atau Model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //belongsToMany ke table atau Model Tag
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getOnlineLabelAttribute()
    {
        if ($this->online == 0) {
            return 'Brouillon';
        }
        return 'Publier';
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
    }

    public function scopePublished($query)
    {
        return $query->where('online' , 1);
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }


}