<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            'Sistem Informasi Akademik Sekolah',
            'Website Profil RPL 64',
            'Aplikasi Presensi Siswa Berbasis QR Code',
            'E-Commerce Sederhana untuk Tugas Akhir',
            'Aplikasi Kasir Kantin Sekolah',
            'Platform Pembelajaran Online RPL',
        ];

        foreach ($projects as $i => $title) {
            Project::create([
                'title' => $title,
                'slug' => Str::slug($title) . '-' . ($i + 1),
                'thumbnail' => null,
                'description' => fake('id_ID')->realText(200),
                'github_url' => 'https://github.com/rpl64/' . Str::slug($title),
                'demo_url' => 'https://' . Str::slug($title) . '.vercel.app',
                'featured' => $i < 2,
            ]);
        }
    }
}
