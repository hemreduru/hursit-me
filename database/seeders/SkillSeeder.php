<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            // Backend
            [
                'name' => 'PHP (Laravel)',
                'category' => 'backend',
                'proficiency' => 95,
                'icon' => 'fab fa-php', // FontAwesome class
                'usages' => [
                    'Developing robust REST APIs',
                    'Building scalable web applications',
                    'Custom CMS development'
                ]
            ],
            [
                'name' => 'MySQL / SQL',
                'category' => 'backend',
                'proficiency' => 90,
                'icon' => 'fas fa-database',
                'usages' => [
                    'Database design and optimization',
                    'Complex queries and migrations'
                ]
            ],
            [
                'name' => '.NET',
                'category' => 'backend',
                'proficiency' => 70,
                'icon' => 'fab fa-microsoft',
                'usages' => ['Familiar with framework concepts']
            ],
            [
                'name' => 'Redis',
                'category' => 'backend',
                'proficiency' => 75,
                'icon' => 'fas fa-server',
                'usages' => ['Caching and session management']
            ],

            // Frontend
            [
                'name' => 'HTML5 / CSS',
                'category' => 'frontend',
                'proficiency' => 95,
                'icon' => 'fab fa-html5',
                'usages' => ['Responsive layout design', 'Modern UI implementation']
            ],
            [
                'name' => 'Vue.js',
                'category' => 'frontend',
                'proficiency' => 85,
                'icon' => 'fab fa-vuejs',
                'usages' => ['Building interactive user interfaces', 'SPA development']
            ],
            [
                'name' => 'React JS',
                'category' => 'frontend',
                'proficiency' => 80,
                'icon' => 'fab fa-react',
                'usages' => ['Component-based development']
            ],

            // DevOps & Tools
            [
                'name' => 'Git / GitLab / GitHub',
                'category' => 'devops',
                'proficiency' => 90,
                'icon' => 'fab fa-git-alt',
                'usages' => ['Version control', 'Collaboration', 'Issue management']
            ],
            [
                'name' => 'Docker',
                'category' => 'devops',
                'proficiency' => 80,
                'icon' => 'fab fa-docker',
                'usages' => ['Containerization', 'Environment consistency']
            ],
            [
                'name' => 'Linux (Ubuntu)',
                'category' => 'devops',
                'proficiency' => 85,
                'icon' => 'fab fa-linux',
                'usages' => ['Server management', 'Development environment']
            ],
            [
                'name' => 'CI/CD',
                'category' => 'devops',
                'proficiency' => 80,
                'icon' => 'fas fa-sync',
                'usages' => ['Automated deployment pipelines']
            ],
             [
                'name' => 'TDD / OOP',
                'category' => 'devops',
                'proficiency' => 90,
                'icon' => 'fas fa-code',
                'usages' => ['Clean Code architecture', 'Test Driven Development']
            ],
        ];

        foreach ($skills as $skillData) {
            $usages = $skillData['usages'];
            unset($skillData['usages']);

            // Default proficiency if not set in loop (though set above)

            $skill = \App\Models\Skill::create($skillData);

            foreach ($usages as $index => $usage) {
                $skill->usages()->create([
                    'description' => ['en' => $usage, 'tr' => $usage], // Using same for TR for now or could translate
                    'sort_order' => $index,
                ]);
            }
        }
    }
}
