<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;




Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.dashboard');
    Route::get('/home/login', 'login')->name('home.login');
    Route::get('/home/register', 'register')->name('home.register');    
});



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

Route::resource('posts', PostController::class)->middleware(['auth', 'role']);
Route::patch('/posts/{post}/toggle-status', [PostController::class, 'toggleStatus'])->middleware(['auth', 'role'])->name('posts.toggleStatus');
Route::resource('categories', CategoryController::class)->middleware(['auth', 'role']);

require __DIR__.'/auth.php';
