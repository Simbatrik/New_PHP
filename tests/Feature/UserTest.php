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

    public function test_create_user()
    {
        $user = Users::factory()->make()->toArray();
        $response = $this->post('api/createUsers', $user);
        $response->assertStatus(201);
    }

    public function test_show_all_users()
    {
        $user = Users::get()->toArray(); 
        $response = $this->get('api/users', $user);
        $response->assertStatus(200);
    }


}
