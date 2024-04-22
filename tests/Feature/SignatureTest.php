<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use App\Models\Signatures; 

class SignatureTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_create_signature()
    {
        $signature = Signatures::factory()->make()->toArray();
        $response = $this->post('api/createSignatures', $signature);
        $response->assertStatus(201);
    }

    public function test_show_all_signature()
    {
        $signature = Signatures::get()->toArray(); 
        $response = $this->get('api/signatures', $signature);
        $response->assertStatus(200);
    }
}
