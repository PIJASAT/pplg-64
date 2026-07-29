<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TeacherSeeder::class,
            SubjectSeeder::class,
            TeacherSubjectSeeder::class,
            ClassSeeder::class,
            StudentSeeder::class,
            ArticleCategorySeeder::class,
            TagSeeder::class,
            ArticleSeeder::class,
            ArticleTagSeeder::class,
            CommentSeeder::class,
            TechnologySeeder::class,
            ProjectSeeder::class,
            ProjectImageSeeder::class,
            ProjectTechnologySeeder::class,
            ProjectMemberSeeder::class,
            RatingSeeder::class,
            GallerySeeder::class,
            AnnouncementSeeder::class,
            ContactMessageSeeder::class,
            SettingSeeder::class,
        ]);
    }
}
