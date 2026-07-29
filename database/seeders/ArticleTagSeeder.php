<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ArticleTagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = Tag::all();

        foreach (Article::all() as $article) {
            $article->tags()->syncWithoutDetaching(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
