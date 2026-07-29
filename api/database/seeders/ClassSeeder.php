<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = Teacher::inRandomOrder()->get();

        $classes = [
            ['name' => 'RPL 1', 'generation' => 'Angkatan 64'],
            ['name' => 'RPL 2', 'generation' => 'Angkatan 64'],
            ['name' => 'RPL 3', 'generation' => 'Angkatan 63'],
        ];

        foreach ($classes as $index => $class) {
            SchoolClass::create([
                'name' => $class['name'],
                'generation' => $class['generation'],
                'homeroom_teacher_id' => $teachers[$index % $teachers->count()]->id,
                'description' => "Kelas {$class['name']} jurusan Rekayasa Perangkat Lunak.",
            ]);
        }
    }
}
