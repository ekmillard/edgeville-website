<?php

namespace Database\Factories;

use App\Helpers\ExperienceHelper;
use App\Models\Highscores;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class HighscoresFactory extends Factory
{
    protected $model = Highscores::class;

    public function definition(): array
    {
        return [
            'username' => User::inRandomOrder()->first()->username,
            'game_mode' => $this->faker->randomElement(ExperienceHelper::$GAME_MODES),
            'overall_xp' => fake()->numberBetween(0, 200000000),
            'attack_xp' => fake()->numberBetween(0, 200000000),
            'defence_xp' => fake()->numberBetween(0, 200000000),
            'strength_xp' => fake()->numberBetween(0, 200000000),
            'hitpoints_xp' => fake()->numberBetween(0, 200000000),
            'ranged_xp' => fake()->numberBetween(0, 200000000),
            'prayer_xp' => fake()->numberBetween(0, 200000000),
            'magic_xp' => fake()->numberBetween(0, 200000000),
            'cooking_xp' => fake()->numberBetween(0, 200000000),
            'woodcutting_xp' => fake()->numberBetween(0, 200000000),
            'fletching_xp' => fake()->numberBetween(0, 200000000),
            'fishing_xp' => fake()->numberBetween(0, 200000000),
            'firemaking_xp' => fake()->numberBetween(0, 200000000),
            'crafting_xp' => fake()->numberBetween(0, 200000000),
            'smithing_xp' => fake()->numberBetween(0, 200000000),
            'mining_xp' => fake()->numberBetween(0, 200000000),
            'herblore_xp' => fake()->numberBetween(0, 200000000),
            'agility_xp' => fake()->numberBetween(0, 200000000),
            'thieving_xp' => fake()->numberBetween(0, 200000000),
            'slayer_xp' => fake()->numberBetween(0, 200000000),
            'farming_xp' => fake()->numberBetween(0, 200000000),
        ];
    }
}
