<?php

namespace Database\Seeders;

use App\Models\Highscores;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HighscoreSeeder extends Seeder
{
    public function run()
    {
        User::factory(150)->create()->each(function ($user) {
           $user->highscores()->save(Highscores::factory()->make());
        });
    }
}
