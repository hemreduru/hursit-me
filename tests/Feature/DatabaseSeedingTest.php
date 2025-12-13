<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DatabaseSeedingTest extends TestCase
{
    /**
     * Test that the database is seeded correctly.
     */
    public function test_database_is_seeded_correctly(): void
    {
        // 1. Personal Info
        $this->assertDatabaseCount('personal_infos', 1);
        $personalInfo = \App\Models\PersonalInfo::first();
        $this->assertEquals('Hurşit Emre Duru', $personalInfo->full_name);

        // 2. Experiences
        $this->assertDatabaseCount('experiences', 2);
        $this->assertDatabaseHas('experiences', [
            'is_current' => true,
        ]);

        // 3. Skills
        $this->assertGreaterThan(0, \App\Models\Skill::count());
        $this->assertDatabaseHas('skills', ['category->en' => 'backend']);
        $this->assertDatabaseHas('skills', ['category->en' => 'frontend']);
        $this->assertDatabaseHas('skills', ['category->en' => 'devops']);

        // 4. Skill Usages
        $this->assertGreaterThan(0, \App\Models\SkillUsage::count());
        $skillWithUsage = \App\Models\Skill::where('name', 'PHP (Laravel)')->first();
        $this->assertNotNull($skillWithUsage);
        $this->assertGreaterThan(0, $skillWithUsage->usages()->count());

        // 5. Portfolios
        $this->assertGreaterThan(0, \App\Models\Portfolio::count());
        $this->assertDatabaseHas('portfolios', ['title->en' => 'Echt Zorg Travel']);

        // 6. Blogs
        $this->assertGreaterThan(0, \App\Models\Blog::count());
        $this->assertDatabaseHas('blogs', ['is_active' => 1]);
        $blog = \App\Models\Blog::first();
        $this->assertNotNull($blog->published_at);
        $this->assertInstanceOf(\Illuminate\Support\Carbon::class, $blog->published_at);

        // 7. Settings
        $this->assertGreaterThan(0, \App\Models\Setting::count());
        $this->assertDatabaseHas('settings', ['key' => 'email']);
    }
}
