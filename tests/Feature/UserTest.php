<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Users; 
use Tests\TestCase;

class UserTest extends TestCase
{
    
    // use RefreshDatabase;
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create()
    {
        $user = Users::factory()->make()->toArray();
        $response = $this->post('api/createUsers', $user);

        $response->assertStatus(201);
    }
}
