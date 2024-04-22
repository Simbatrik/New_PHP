<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Companies;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_create_company()
    {
        $company = Companies::factory()->make()->toArray();
        $response = $this->post('api/createAnswers', $company);
        $response->assertStatus(201);
    }

    public function test_show_all_company()
    {
        $company = Companies::get()->toArray(); 
        $response = $this->get('api/answers', $company);
        $response->assertStatus(200);
    }
}
