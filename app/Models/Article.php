<?php

namespace App\Models;

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
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

    public function getStatusLabelAttribute()
    {
        if ($this->status == 0) {
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
        return $query->where('status' , 1);
    }

    public function scopeFilter($query, $filter)
    {
        
        // check if any term entered
        if (isset($filter['term']) && $term = strtolower($filter['term']))
        {
            $query->where(function($q) use ($term) {
                $q->whereHas('author', function($qr) use ($term) {
                        $qr->where('name', 'LIKE', "%{$term}%");
                    });
                    $q->orWhereHas('category', function($qr) use ($term) {
                            $qr->where('title', 'LIKE', "%{$term}%");
                        });
                        $q->orWhereHas('tags', function($qr) use ($term) {
                            $qr->where('title', 'LIKE', "%{$term}%");
                        });
                        $q->orWhereRaw('LOWER(title) LIKE ?', ["%{$term}%"]);
             });
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


}