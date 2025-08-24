<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Portfolio Website',
                'description' => 'A personal portfolio website built with Laravel, showcasing my skills, projects, and achievements.',
                'type' => 'personal',
                'tools' => json_encode(['Laravel', 'MySQL', 'Tailwind CSS', 'Alpine.js']),
                'github_url' => 'https://github.com/abir3262/portfolio',
                'demo_url' => 'https://portfolio.abir3262.com',
                'images' => json_encode(['https://i.ibb.co/TM5C1Qx/portfolio.jpg']),
                'keywords' => json_encode(['Laravel', 'Portfolio', 'Web Development']),
                'status' => 'active',
                'user_id' => 1
            ],
            [
                'name' => 'Job Portal System',
                'description' => 'A comprehensive job portal system where employers can post jobs and candidates can apply.',
                'type' => 'personal',
                'tools' => json_encode(['Laravel', 'MySQL', 'Bootstrap', 'jQuery']),
                'github_url' => 'https://github.com/abir3262/job-portal',
                'demo_url' => 'https://jobs.abir3262.com',
                'images' => json_encode(['https://i.ibb.co/vw7bQBg/job-portal.png']),
                'keywords' => json_encode(['Laravel', 'Job Portal', 'Web Development']),
                'status' => 'active',
                'user_id' => 1
            ],
            [
                'name' => 'E-commerce Mobile App',
                'description' => 'A mobile e-commerce application with real-time inventory management.',
                'type' => 'client',
                'tools' => json_encode(['Flutter', 'Firebase', 'GetX']),
                'github_url' => 'https://github.com/abir3262/ecommerce-app',
                'demo_url' => 'https://play.google.com/store/apps/details?id=com.abir3262.ecommerce',
                'images' => json_encode(['https://i.ibb.co/BVXnH5m/ecommerce.jpg']),
                'keywords' => json_encode(['Flutter', 'Mobile App', 'E-commerce']),
                'status' => 'active',
                'user_id' => 1
            ],
            [
                'name' => 'Student Management System',
                'description' => 'A complete student management system for educational institutions.',
                'type' => 'academic',
                'tools' => json_encode(['Laravel', 'MySQL', 'Vue.js']),
                'github_url' => 'https://github.com/abir3262/student-ms',
                'demo_url' => 'https://sms.abir3262.com',
                'images' => json_encode(['https://i.ibb.co/Pc6QmqQ/student-ms.jpg']),
                'keywords' => json_encode(['Laravel', 'Education', 'Management System']),
                'status' => 'active',
                'user_id' => 1
            ]
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
