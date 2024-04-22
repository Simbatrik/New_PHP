<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\General; 
use Tests\TestCase;

class GeneralTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_create_general()
    {
        $general = General::factory()->make()->toArray();
        $response = $this->post('api/createGeneral', $general);
        $response->assertStatus(201);
    }

    public function test_show_all_general()
    {
        $general = General::get()->toArray(); 
        $response = $this->get('api/general', $general);
        $response->assertStatus(200);
    }
}
