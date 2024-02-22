<?php

namespace Database\Factories;

use App\Models\Forms; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\forms>
 */
class formsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(),
            'url' => fake()->url(),
            'company_id' => Companies::get()->random()->id
        ];
    }
}
