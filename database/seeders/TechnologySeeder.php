<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    public function run(): void
    {
        $technologies = [
            ['name' => 'Laravel', 'website' => 'https://laravel.com'],
            ['name' => 'Next.js', 'website' => 'https://nextjs.org'],
            ['name' => 'React', 'website' => 'https://react.dev'],
            ['name' => 'Tailwind CSS', 'website' => 'https://tailwindcss.com'],
            ['name' => 'MySQL', 'website' => 'https://www.mysql.com'],
            ['name' => 'Node.js', 'website' => 'https://nodejs.org'],
            ['name' => 'Flutter', 'website' => 'https://flutter.dev'],
            ['name' => 'Figma', 'website' => 'https://figma.com'],
        ];

        foreach ($technologies as $tech) {
            Technology::create([
                'name' => $tech['name'],
                'icon' => null,
                'website' => $tech['website'],
            ]);
        }
    }
}
