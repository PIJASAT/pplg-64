<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Kegiatan Belajar', 'Ekstrakurikuler', 'Study Tour', 'Wisuda', 'Lomba'];

        for ($i = 1; $i <= 10; $i++) {
            Gallery::create([
                'title' => "Dokumentasi Kegiatan {$i}",
                'image' => "galleries/kegiatan-{$i}.jpg",
                'category' => $categories[$i % count($categories)],
            ]);
        }
    }
}
