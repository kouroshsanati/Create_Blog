<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

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
    public function definition(): array
    {
        $user_id  = User::query()->inRandomOrder()->first()->id;
        return [
            'title' => fake()->unique()->name(),
            'content' => fake()->text,
            'user_id' => $user_id
        ];
    }
}
