<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $categories = ArticleCategory::all();
        $authors = User::whereHas('role', fn ($q) => $q->whereIn('name', ['Admin', 'Teacher']))->get();

        $titles = [
            'Siswa RPL Raih Juara 1 Lomba Web Design Tingkat Provinsi',
            'Tips Belajar Laravel untuk Pemula',
            'Kunjungan Industri Jurusan RPL ke Perusahaan Teknologi',
            'Workshop Next.js Bersama Alumni RPL 64',
            'Serunya Praktik Kerja Lapangan Siswa RPL',
            'Panduan Membangun REST API dengan Laravel',
            'Persiapan Ujian Kompetensi Keahlian RPL',
            'Kolaborasi Proyek Siswa dan Guru dalam Membangun Aplikasi Sekolah',
            'Mengenal Framework Frontend Populer di Tahun Ini',
            'Kegiatan Ekstrakurikuler Coding Club RPL',
        ];

        foreach ($titles as $i => $title) {
            Article::create([
                'category_id' => $categories->random()->id,
                'author_id' => $authors->random()->id,
                'title' => $title,
                'slug' => Str::slug($title) . '-' . ($i + 1),
                'thumbnail' => null,
                'excerpt' => fake('id_ID')->realText(100),
                'content' => fake('id_ID')->realText(800),
                'published_at' => now()->subDays(rand(1, 60)),
                'is_published' => true,
                'views' => rand(10, 500),
            ]);
        }
    }
}
