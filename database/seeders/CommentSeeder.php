<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Article::all() as $article) {
            $commentCount = rand(0, 4);

            for ($i = 0; $i < $commentCount; $i++) {
                Comment::create([
                    'user_name' => fake('id_ID')->name(),
                    'email' => fake()->safeEmail(),
                    'content' => fake('id_ID')->realText(100),
                    'commentable_id' => $article->id,
                    'commentable_type' => Article::class,
                    'is_approved' => fake()->boolean(80),
                ]);
            }
        }
    }
}
