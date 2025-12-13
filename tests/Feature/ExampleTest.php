<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_redirects_root_to_home(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
        $response->assertRedirect(route('home'));
    }

    public function test_the_application_returns_a_successful_response_for_home(): void
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
