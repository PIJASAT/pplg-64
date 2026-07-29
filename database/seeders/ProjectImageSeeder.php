<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Database\Seeder;

class ProjectImageSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Project::all() as $project) {
            for ($i = 1; $i <= 3; $i++) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image' => "projects/{$project->slug}/image-{$i}.jpg",
                    'description' => "Tampilan {$i} dari {$project->title}",
                ]);
            }
        }
    }
}
