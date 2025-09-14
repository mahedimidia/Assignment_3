<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function index()
   {
         $user = Auth::user();
        if ($user->role === 'admin') {
           
           return view('Admin.dashboard', [
               'postCount' => Post::count(),
               'categoryCount' => Category::count(),
               'userCount' => User::count(),
               'users' => User::all(),
               
           ]);
       }else{
           return view('Admin.dashboard', [
               'postCount' => Post::where('user_id', $user->id)->count(),
               'categoryCount' => Category::where('user_id', $user->id)->count(),
               'userCount' => Auth::user()->name,
           ]);
       }
   }
}
