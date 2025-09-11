<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.dashboard',[
            'posts' => Post::get(),
            'categories' => Category::get()
        ]);
    }

    public function login()
    {
        return view('Home.login');
    }

    public function register()
    {
        return view('Home.register');
    }
}
