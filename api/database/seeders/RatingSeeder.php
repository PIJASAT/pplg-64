<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Project::all() as $project) {
            $ratingCount = rand(1, 5);

            for ($i = 0; $i < $ratingCount; $i++) {
                Rating::create([
                    'user_name' => fake('id_ID')->name(),
                    'rating' => rand(3, 5),
                    'rateable_id' => $project->id,
                    'rateable_type' => Project::class,
                ]);
            }
        }
    }
}
