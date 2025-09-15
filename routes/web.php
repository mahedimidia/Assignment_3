<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

 Route::resource('posts', PostController::class);
 Route::patch('/posts/{post}/toggle-status', [PostController::class, 'toggleStatus'])->name('posts.toggleStatus');

 Route::resource('categories', CategoryController::class);

Route::get('/', [HomeController::class, 'index'])->name('home.dashboard');
Route::get('home/login',[HomeController::class,'login'])->name('home.login');
Route::get('home/register',[HomeController::class,'register'])->name('home.register');



Route::middleware(['auth', 'role'])
->controller(AdminController::class)
->prefix('admin')
->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/user/create', 'create_user')->name('user.create');
    Route::post('/user/store', 'store_user')->name('user.store');
    Route::get('/user/edit/{id}', 'edit_user')->name('user.edit');
    Route::post('/user/update/{id}', 'update_user')->name('user.update');
    Route::delete('/user/delete/{id}', 'delete_user')->name('user.destroy');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
