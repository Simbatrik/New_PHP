<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Models\Answers; 
use Tests\TestCase;

class AnswerTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_create_answer()
    {
        $answer = Answers::factory()->make()->toArray();
        $response = $this->post('api/createAnswers', $answer);
        $response->assertStatus(201);
    }

    public function test_show_all_answer()
    {
        $answer = Answers::get()->toArray(); 
        $response = $this->get('api/answers', $answer);
        $response->assertStatus(200);
    }

    
}
