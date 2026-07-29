<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            ContactMessage::create([
                'name' => fake('id_ID')->name(),
                'email' => fake()->safeEmail(),
                'subject' => fake()->randomElement([
                    'Pertanyaan Pendaftaran',
                    'Kerja Sama Industri',
                    'Informasi Kunjungan Sekolah',
                    'Saran untuk Website',
                ]),
                'message' => fake('id_ID')->realText(150),
                'is_read' => fake()->boolean(50),
            ]);
        }
    }
}
