<?php

namespace App\Http\Controllers;

use cache;
use App\Models\Article;

class SiteMapController extends Controller
{
    public function index()
    {
        $expiration = now()->addDay(1);

        $articles = cache()->remember('sitemap.articles', $expiration, function () {
            return Article::published()
                ->orderBy('created_at')
                ->get();
        });

        return response()
            ->view('sitemap', ['articles' => $articles])
            ->header('Content-Type', 'text/xml');
    }
}