<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
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
