<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'site_name' => 'Website Profil RPL 64',
            'site_tagline' => 'Rekayasa Perangkat Lunak - Siap Kerja, Siap Kuliah, Siap Usaha',
            'contact_email' => 'info@rpl64.sch.id',
            'contact_phone' => '021-1234567',
            'address' => 'Jl. Pendidikan No. 64, Jakarta',
            'instagram_url' => 'https://instagram.com/rpl64',
            'youtube_url' => 'https://youtube.com/@rpl64',
        ];

        foreach ($settings as $key => $value) {
            Setting::create(['key' => $key, 'value' => $value]);
        }
    }
}
