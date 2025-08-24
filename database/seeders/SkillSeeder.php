<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'HTML / CSS / JavaScript',
                'type' => 'technical',
                'level' => 'expert',
                'user_id' => 1
            ],
            [
                'name' => 'PHP / Laravel',
                'type' => 'technical',
                'level' => 'expert',
                'user_id' => 1
            ],
            [
                'name' => 'MySQL / Database Design',
                'type' => 'technical',
                'level' => 'intermediate',
                'user_id' => 1
            ],
            [
                'name' => 'Flutter (Mobile App)',
                'type' => 'technical',
                'level' => 'intermediate',
                'user_id' => 1
            ],
            [
                'name' => 'Machine Learning (Python)',
                'type' => 'technical',
                'level' => 'intermediate',
                'user_id' => 1
            ],
            [
                'name' => 'Programming Language (C, C++)',
                'type' => 'technical',
                'level' => 'expert',
                'user_id' => 1
            ]
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
