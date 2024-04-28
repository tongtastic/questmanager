<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spell>
 */
class SpellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'type' => Arr::random([
                'attack',
                'defence'
            ]),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'attributes' => json_encode([
                fake()->word() => fake()->sentence()
            ]),
            'value' => rand(1,1000)
        ];
    }
}
