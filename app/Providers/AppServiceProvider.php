<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Post;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
        public function register(): void
        {
            //
        }

    /**
     * Bootstrap any application services.
     */
        public function boot(): void
        {
            Gate::define('permission', function (User $user, Post $post) {
            // Admin can edit/delete any post
            if ($user->role === 'admin') {
                return true;
            }

            // Content creator can edit/delete only their own post
            return $user->id === $post->user_id;
        });

        Gate::define('status-update', function (User $user, Post $post) {
            // Only admin can change post status
            return $user->role === 'admin';
        });

    }
}
