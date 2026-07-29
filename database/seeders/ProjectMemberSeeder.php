<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Database\Seeder;

class ProjectMemberSeeder extends Seeder
{
    public function run(): void
    {
        $students = Student::all();
        $roles = ['Ketua Tim', 'Frontend Developer', 'Backend Developer', 'UI/UX Designer', 'QA Tester'];

        foreach (Project::all() as $project) {
            $members = $students->random(rand(2, 4));

            foreach ($members as $index => $student) {
                $project->members()->syncWithoutDetaching([
                    $student->id => ['role' => $roles[$index % count($roles)]],
                ]);
            }
        }
    }
}
