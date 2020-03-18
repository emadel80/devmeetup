<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function index()
    {
        $appName = config('app.name', 'DevMeetup');

        $links = $this->jsonEncodedLinks();

        return view('devmeetup.index', compact('appName', 'links'));
    }

    private function jsonEncodedLinks() 
    {
        $links = [
            [
                'icon'  => 'mdi-account-circle', 
                'text'  => 'View Meetups', 
                'url'   => '/meetups'
            ]
        ];

        if (Auth::user())
        {
            array_push($links, [
                'icon'  => 'mdi-map-marker', 
                'text'  => 'Organize Meetups', 
                'url'   => '/organize-meetups' 
            ]);

            array_push($links, [
                'icon'  => 'mdi-account', 
                'text'  => 'Profile', 
                'url'   => '/profile' . Auth::user()->username
            ]);

            array_push($links, [
                'icon'  => 'mdi-logout',
                'text'  => 'Logout',
                'url'   => '/logout'
            ]);
        }
        else 
        {
            array_push($links, [
                'icon' => 'mdi-login',
                'text' => 'Login',
                'url'  => '/login'
            ]);
        }

        return json_encode($links, TRUE);
    }
}
