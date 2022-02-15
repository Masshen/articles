<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index1Controller extends Controller
{
    public function index()
    {
        $site_settings = [
            'title' =>'Mon premier site avec Laravel',
            'description' => 'pour la description des articles'
        ];

        return view('home', [
            'site_settings' => $site_settings
        ]);
    }
}
