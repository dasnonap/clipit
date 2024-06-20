<?php

namespace Tests\Feature;

use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Post;

class PostTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_user_post_creation(): void
    {
        $user = User::factory(1)->has(Post::factory()->count(5))->create()->first();

        $posts = $user->posts();

        $this->assertNotEmpty($user, "User couldn't be created.");

        $this->assertNotEmpty($posts, "Posts couldn't be created for user");
    }
}
