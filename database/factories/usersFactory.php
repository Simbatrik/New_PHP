<?php

namespace Database\Factories;

use App\Models\Users; 
use App\Models\Companies; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UsersFactory extends Factory
{
    protected $model = Users::class; 
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'log_in' => fake()->userName(),
            'password' => fake()->password(),
            'name' => fake()->firstname($gender = 'male'|'female'),
            'surname' => fake()->lastname(),
            'city' => fake()->city(),
            'department' => fake()->bs(),
            'job_title' => fake()->jobTitle(),
            'email' => fake()->email(),
            'mobile' => fake()->phoneNumber(),
            'company_id' => Companies::get()->random()->id
        ];
    }
}
