<?php

namespace Database\Seeders;

use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $classes = SchoolClass::all();
        $studentUsers = User::whereHas('role', fn ($q) => $q->where('name', 'Student'))->get();

        foreach ($studentUsers as $index => $user) {
            $username = Str::slug($user->name);

            Student::create([
                'class_id' => $classes[$index % $classes->count()]->id,
                'user_id' => $user->id,
                'name' => $user->name,
                'photo' => null,
                'bio' => fake('id_ID')->realText(120),
                'github' => "https://github.com/{$username}",
                'linkedin' => "https://linkedin.com/in/{$username}",
                'portfolio' => "https://{$username}.vercel.app",
                'status' => fake()->randomElement(['active', 'active', 'active', 'alumni']),
            ]);
        }
    }
}
