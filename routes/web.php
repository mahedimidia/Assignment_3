<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::view('/admin', 'Admin.dashboard')->name('admin.dashboard');

 Route::resource('posts', PostController::class);
 Route::resource('categories', CategoryController::class);

Route::get('/', [HomeController::class, 'index'])->name('home.dashboard');
Route::get('home/login',[HomeController::class,'login'])->name('home.login');
Route::get('home/register',[HomeController::class,'register'])->name('home.register');


Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'role'])->name('dashboard');




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
