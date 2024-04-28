<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Monster>
 */
class MonsterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'body' => rand(1,8),
            'mind' => rand(1,8),
            'attributes' => json_encode([
                fake()->word() => fake()->sentence()
            ]),
            'defense' => rand(1,8),
            'attack' => rand(1,5),
            'gold' => rand(100,1000),
            'type' => rand(1,30),
            'image' => fake()->imageUrl(640, 480, 'animals', true)
        ];
    }
}