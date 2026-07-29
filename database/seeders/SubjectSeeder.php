<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            'Pemrograman Web',
            'Basis Data',
            'Pemrograman Berorientasi Objek',
            'Jaringan Komputer',
            'Matematika',
            'Bahasa Inggris',
            'Produk Kreatif dan Kewirausahaan',
            'Pemrograman Mobile',
        ];

        foreach ($subjects as $name) {
            Subject::create(['name' => $name]);
        }
    }
}
