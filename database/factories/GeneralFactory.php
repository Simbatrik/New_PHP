<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Companies; 
use App\Models\Users; 
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\General>
 */
class GeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => Users::get()->random()->id,
            'company_id' => Companies::get()->random()->id
        ];
    }
}
