<?php

namespace Database\Factories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PokemonFactory extends Factory
{
    protected $model = Pokemon::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'species' => $this->faker->word(),
            'primary_type' => $this->faker->randomElement([
                'Grass', 'Fire', 'Water', 'Bug', 'Normal', 'Poison',
                'Electric', 'Ground', 'Fairy', 'Fighting', 'Psychic',
                'Rock', 'Ghost', 'Ice', 'Dragon', 'Dark', 'Steel', 'Flying'
            ]),
            'weight' => $this->faker->randomFloat(2, 0.1, 100),
            'height' => $this->faker->randomFloat(2, 0.1, 3),
            'hp' => $this->faker->numberBetween(1, 255),
            'attack' => $this->faker->numberBetween(1, 190),
            'defense' => $this->faker->numberBetween(1, 230),
            'is_legendary' => $this->faker->boolean(),
            'photo' => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
