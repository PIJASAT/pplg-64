<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        $titles = [
            'Jadwal Penilaian Akhir Semester Ganjil',
            'Pengumuman Libur Hari Raya',
            'Pendaftaran Peserta Didik Baru Dibuka',
            'Jadwal Praktik Kerja Lapangan Angkatan 64',
            'Pengumuman Kelulusan Ujian Kompetensi Keahlian',
        ];

        foreach ($titles as $i => $title) {
            Announcement::create([
                'title' => $title,
                'slug' => Str::slug($title) . '-' . ($i + 1),
                'content' => fake('id_ID')->realText(300),
                'published_at' => now()->subDays(rand(1, 30)),
            ]);
        }
    }
}
