<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSubjectSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();

        foreach ($teachers as $teacher) {
            // each teacher teaches 1-3 random subjects
            $assigned = $subjects->random(rand(1, 3));
            foreach ($assigned as $subject) {
                $teacher->subjects()->syncWithoutDetaching([$subject->id]);
            }
        }
    }
}
