<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'body' => fake()->paragraph(),
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl7_TS7Brodj3Yh_3Acw3bQcMfo787N_x1Ng&s',
            'user_id' => User::factory(),
        ];
    }
}
