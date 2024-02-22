<?php

namespace Database\Factories;

use App\Models\Signatures; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\signatures>
 */
class signaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'form_id' => Forms::get()->random()->id,
            'user_id' => users::get()->random()->id
        ];
    }
}
