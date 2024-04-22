<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Fields;
use Tests\TestCase;

class FieldTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_create_fields()
    {
        $fields = Fields::factory()->make()->toArray();
        $response = $this->post('api/createFields', $fields);
        $response->assertStatus(201);
    }

    public function test_show_all_fields()
    {
        $fields = Fields::get()->toArray(); 
        $response = $this->get('api/fields', $fields);
        $response->assertStatus(200);
    }
}
