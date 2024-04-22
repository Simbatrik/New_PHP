<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\forms;
use Tests\TestCase;

class FormTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_create_forms()
    {
        $forms = forms::factory()->make()->toArray();
        $response = $this->post('api/createForms', $forms);
        $response->assertStatus(201);
    }

    public function test_show_all_forms()
    {
        $forms = forms::get()->toArray(); 
        $response = $this->get('api/forms', $forms);
        $response->assertStatus(200);
    }
}
