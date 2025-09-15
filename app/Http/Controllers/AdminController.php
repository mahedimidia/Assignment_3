<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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

    public function create_user()
    {
        Gate::authorize('status-update');
        return view('Admin.create_user');
    }


    public function store_user(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:admin,reader,content_creator',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('dashboard')->with('success', 'User created successfully.');
    }



    public function edit_user($id)
    {
        Gate::authorize('status-update');
         $user = User::findOrFail($id);
         return view('Admin.edit_user', compact('user'));
    }

    public function update_user(Request $request, $id)
    {
        Gate::authorize('status-update');
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required|string|in:admin,reader,content_creator',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('dashboard')->with('success', 'User updated successfully.');
    }


    public function delete_user($id)
    {
        Gate::authorize('status-update');
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('dashboard')->with('success', 'User deleted successfully.');
    }



}
