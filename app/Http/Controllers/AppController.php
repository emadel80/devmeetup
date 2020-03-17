<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $links = [
            [ 'url'  => "https://laravel.com/docs",             'text'  => 'Docs' ],
            [ 'url'  => 'https://laracasts.com',                'text'  => 'Laracasts' ],
            [ 'url'  => 'https://laravel-news.com',             'text'  => 'News' ],
            [ 'url'  => 'https://blog.laravel.com',             'text'  => 'Blog' ],
            [ 'url'  => 'https://nova.laravel.com',             'text'  => 'Nova' ],
            [ 'url'  => 'https://forge.laravel.com',            'text'  => 'Forge' ],
            [ 'url'  => 'https://vapor.laravel.com',            'text'  => 'Vapor'],
            [ 'url'  => 'https://github.com/laravel/laravel',   'text'  => 'Github' ]
        ];
        
        return view('devmeetup.index', compact('links'));
    }
}
