<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class ProjectTechnologySeeder extends Seeder
{
    public function run(): void
    {
        $technologies = Technology::all();

        foreach (Project::all() as $project) {
            $project->technologies()->syncWithoutDetaching(
                $technologies->random(rand(2, 4))->pluck('id')->toArray()
            );
        }
    }
}
