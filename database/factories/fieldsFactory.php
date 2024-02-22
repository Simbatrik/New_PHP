<?php

namespace Database\Factories;

use App\Models\Fields; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\fields>
 */
class fieldsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title_forms' => fake()->sentence(),
            'form_id' => Forms::get()->random()->id
        ];
    }
}
