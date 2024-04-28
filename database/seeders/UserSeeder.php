<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Item;
use App\Models\Skill;
use App\Models\Character;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Paolo',
            'email' => 'poalo@questmanager.com',
            'password' => Hash::make('password')
        ])->hasrole('admin');

        User::factory()->has(Character::factory([
                'name' => 'Olaf',
                'type' => 'barbarian',
                'body' => 8,
                'mind' => 2,
                'attack' => 5,
                'defense' => 2,
                'gold' => 106,
                'experience' => 100,
                'image' => 'https://static.vecteezy.com/system/resources/previews/030/592/517/large_2x/barbarian-in-a-powerful-and-commanding-pose-showcasing-his-impressive-physique-and-warrior-spirit-generative-ai-photo.jpeg'
            ])->has(Item::factory([
                'name' => 'axe',
                'type' => 'attack',
                'attributes' => json_encode([
                    'Cleave' => 'attack all enemies infront of character, +3A'
                ])
            ]))->has(Skill::factory([
                'name' => 'Beserker',
                'type' => 'attack',
                'attributes' => json_encode([
                    '+2A' => 'Lasts for 3 turns, costs 2 HP'
                ])
            ])))->create([
                'name' => 'Tom',
                'email' => 'tom@questmanager.com',
                'password' => Hash::make('password')
            ]);

        User::factory()->has(Character::factory([
                    'name' => 'Keith',
                    'type' => 'elf'
            ])->has(Item::factory([
                'name' => 'knife',
                'type' => 'attack'
            ])))
            ->create([
                'name' => 'Dave',
                'email' => 'dave@questmanager.com',
                'password' => Hash::make('password')
            ]);

        User::factory()->has(Character::factory([
                'name' => 'Massive',
                'type' => 'dwarf'
            ])->has(Item::factory([
                'name' => 'hammer',
                'type' => 'attack'
            ])))
            ->create([
                'name' => 'Liam',
                'email' => 'liam@questmanager.com',
                'password' => Hash::make('password')
            ]);

        User::factory()->has(Character::factory([
                'name' => 'Derek',
                'type' => 'wizard'
            ])->has(Item::factory([
                'name' => 'staff',
                'type' => 'attack'
            ])))
            ->create([
                'name' => 'Matt',
                'email' => 'matt@questmanager.com',
                'password' => Hash::make('password')
            ]);
    }
}
