<?php

namespace Database\Factories;

use App\Models\Companies; 
use App\Models\users; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\companies>
 */
class companiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'user_id' => users::get()->random()->id
        ];
    }
}
