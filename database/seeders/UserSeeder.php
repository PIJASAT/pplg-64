<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::where('name', 'Admin')->first();
        $teacherRole = Role::where('name', 'Teacher')->first();
        $studentRole = Role::where('name', 'Student')->first();

        User::create([
            'role_id' => $adminRole->id,
            'name' => 'Admin RPL 64',
            'email' => 'admin@rpl64.sch.id',
            'password' => Hash::make('password'),
            'avatar' => null,
        ]);

        // 8 teacher accounts
        for ($i = 1; $i <= 8; $i++) {
            User::create([
                'role_id' => $teacherRole->id,
                'name' => fake('id_ID')->name(),
                'email' => "guru{$i}@rpl64.sch.id",
                'password' => Hash::make('password'),
                'avatar' => null,
            ]);
        }

        // 20 student accounts
        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'role_id' => $studentRole->id,
                'name' => fake('id_ID')->name(),
                'email' => "siswa{$i}@rpl64.sch.id",
                'password' => Hash::make('password'),
                'avatar' => null,
            ]);
        }
    }
}
