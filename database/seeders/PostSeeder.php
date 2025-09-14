<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = ['draft', 'published'];

        for ($i = 1; $i <= 20; $i++) {
            Post::create([
                'title'       => 'Post Title ' . $i,
                'author'      => 'Author ' . $i,
                'body'        => 'This is the body of post ' . $i . '. ' . Str::random(80),
                'category_id' => rand(1, 5), // random category 1–5
                'user_id'     => rand(1, 2), // random user 1 or 2
                'status'      => $statuses[array_rand($statuses)],
            ]);
        }
    }
}
