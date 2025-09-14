<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Technology',
            'Health',
            'Education',
            'Travel',
            'Business',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category) . '-' . Str::random(5), // unique slug
                'user_id' => rand(1, 2), // random user (id:1 or 2)
            ]);
        }
    }
}
