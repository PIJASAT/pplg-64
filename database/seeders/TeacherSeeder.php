<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $positions = ['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Kepala Jurusan RPL', 'Guru Produktif', 'Guru Produktif', 'Wali Kelas', 'Wali Kelas', 'Guru Umum'];

        $teacherUsers = User::whereHas('role', fn ($q) => $q->where('name', 'Teacher'))->get();

        foreach ($teacherUsers as $index => $user) {
            Teacher::create([
                'user_id' => $user->id,
                'name' => $user->name,
                'photo' => null,
                'email' => $user->email,
                'bio' => fake('id_ID')->realText(150),
                'position' => $positions[$index % count($positions)],
            ]);
        }
    }
}
