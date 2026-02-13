<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password',
            'role' => 'admin',
        ]);

        // Create Editor User
        $editor = User::create([
            'name' => 'Editor User',
            'email' => 'editor@example.com',
            'password' => 'password',
            'role' => 'editor',
        ]);

        // Create Regular User
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => 'password',
            'role' => 'user',
        ]);

        // Create Sample News for Admin
        News::create([
            'title' => 'Breaking News: Laravel 12 Released',
            'slug' => 'breaking-news-laravel-12-released',
            'content' => 'Laravel 12 has been officially released with amazing new features including improved performance, better developer experience, and new tools for modern web development.',
            'status' => 'published',
            'published_at' => now(),
            'user_id' => $admin->id,
        ]);

        News::create([
            'title' => 'Introduction to Filament v3',
            'slug' => 'introduction-to-filament-v3',
            'content' => 'Filament v3 brings a complete redesign with improved UI/UX, better performance, and more flexible components for building admin panels.',
            'status' => 'published',
            'published_at' => now()->subDays(1),
            'user_id' => $admin->id,
        ]);

        // Create Sample News for Editor
        News::create([
            'title' => 'Top 10 PHP Frameworks in 2024',
            'slug' => 'top-10-php-frameworks-in-2024',
            'content' => 'Explore the most popular PHP frameworks that are dominating web development in 2024, from Laravel to Symfony and beyond.',
            'status' => 'published',
            'published_at' => now()->subDays(2),
            'user_id' => $editor->id,
        ]);

        News::create([
            'title' => 'Building Modern Web Applications',
            'slug' => 'building-modern-web-applications',
            'content' => 'Learn how to build scalable and maintainable web applications using modern best practices and tools.',
            'status' => 'draft',
            'user_id' => $editor->id,
        ]);

        News::create([
            'title' => 'Database Optimization Techniques',
            'slug' => 'database-optimization-techniques',
            'content' => 'Discover advanced techniques to optimize your database queries and improve application performance significantly.',
            'status' => 'draft',
            'user_id' => $editor->id,
        ]);

        // Create more sample news
        News::create([
            'title' => 'Understanding RESTful API Design',
            'slug' => 'understanding-restful-api-design',
            'content' => 'A comprehensive guide to designing clean, scalable, and maintainable RESTful APIs for your applications.',
            'status' => 'published',
            'published_at' => now()->subDays(3),
            'user_id' => $admin->id,
        ]);

        News::create([
            'title' => 'Mastering Eloquent ORM',
            'slug' => 'mastering-eloquent-orm',
            'content' => 'Deep dive into Laravel\'s Eloquent ORM and learn advanced techniques for working with databases.',
            'status' => 'published',
            'published_at' => now()->subDays(4),
            'user_id' => $editor->id,
        ]);

        News::create([
            'title' => 'Security Best Practices for Web Apps',
            'slug' => 'security-best-practices-for-web-apps',
            'content' => 'Essential security practices every developer should implement to protect their web applications.',
            'status' => 'draft',
            'user_id' => $admin->id,
        ]);

        $this->command->info('Database seeded successfully!');
        $this->command->info('Admin credentials: admin@example.com / password');
        $this->command->info('Editor credentials: editor@example.com / password');
        $this->command->info('User credentials: user@example.com / password');
    }
}
