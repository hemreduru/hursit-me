<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ContentVisibilityTest extends TestCase
{
    use RefreshDatabase;

    public function test_experience_creation_appears_on_home_page()
    {
        $experience = Experience::create([
            'company_name' => 'Test Company',
            'role' => ['en' => 'Test Role', 'tr' => 'Test Rolü'],
            'description' => ['en' => 'Test Desc', 'tr' => 'Test Açıklama'],
            'start_date' => now()->subYear(),
            'is_current' => true,
        ]);

        $response = $this->get('/home');
        $response->assertStatus(200);
        $response->assertSee('Test Company');
        $response->assertSee('Test Role');
    }

    public function test_portfolio_creation_appears_on_home_and_index()
    {
        $project = Portfolio::create([
            'title' => ['en' => 'New Project', 'tr' => 'Yeni Proje'],
            'slug' => ['en' => 'new-project', 'tr' => 'yeni-proje'],
            'description' => ['en' => 'Project Desc', 'tr' => 'Proje Açıklama'],
            'image' => 'projects/test.jpg',
            'link' => 'https://example.com',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        // Check Home
        $response = $this->get('/home');
        $response->assertSee('New Project');

        // Check Index
        $response = $this->get('/portfolio');
        $response->assertSee('New Project');

        // Check Show
        $response = $this->get('/portfolio/new-project');
        $response->assertStatus(200);
        $response->assertSee('New Project');
    }

    public function test_blog_creation_appears_on_home_and_index()
    {
        $post = Blog::create([
            'title' => ['en' => 'New Post', 'tr' => 'Yeni Yazı'],
            'slug' => ['en' => 'new-post', 'tr' => 'yeni-yazi'],
            'content' => ['en' => 'Content here', 'tr' => 'İçerik burada'],
            'is_active' => true,
            'published_at' => now(),
        ]);

        // Check Home
        $response = $this->get('/home');
        $response->assertSee('New Post');

        // Check Index
        $response = $this->get('/blog');
        $response->assertSee('New Post');

        // Check Show
        // Debug
        // dd(Blog::all()->toArray());

        $response = $this->get('/blog/new-post');
        $response->assertStatus(200);
        $response->assertSee('New Post');
    }

    public function test_skill_creation_appears_on_home_page()
    {
        $skill = Skill::create([
            'name' => 'PHP',
            'category' => ['en' => 'backend', 'tr' => 'backend'],
            'proficiency' => 90,
            'icon' => 'php',
        ]);

        $response = $this->get('/home');
        $response->assertSee('PHP');
    }
}
