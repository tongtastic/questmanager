<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
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
            'experience' => rand(100,300),
            'defense' => rand(1,8),
            'attack' => rand(1,5),
            'gold' => rand(100,1000),
            'type' => Arr::random([
                'barbarian',
                'dwarf',
                'elf',
                'wizard'
            ]),
            'image' => fake()->imageUrl(640, 480, 'animals', true)
        ];
    }
}
