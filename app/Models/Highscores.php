<?php

namespace App\Models;

use App\Helpers\ExperienceHelper;
use Database\Factories\HighscoresFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highscores extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'game_mode',
        'overall_xp',
        'attack_xp',
        'defence_xp',
        'strength_xp',
        'hitpoints_xp',
        'ranged_xp',
        'prayer_xp',
        'magic_xp',
        'cooking_xp',
        'woodcutting_xp',
        'fletching_xp',
        'fishing_xp',
        'firemaking_xp',
        'crafting_xp',
        'smithing_xp',
        'mining_xp',
        'herblore_xp',
        'agility_xp',
        'thieving_xp',
        'slayer_xp',
        'farming_xp',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'username', 'username');
    }

    protected static function newFactory(): Factory
    {
        return HighscoresFactory::new();
    }

    public function getTotalLevel() {
        $total = 0;
        $skills = [
            'attack_xp', 'defence_xp', 'strength_xp', 'hitpoints_xp', 'ranged_xp',
            'prayer_xp', 'magic_xp', 'cooking_xp', 'woodcutting_xp', 'fletching_xp',
            'fishing_xp', 'firemaking_xp', 'crafting_xp', 'smithing_xp', 'mining_xp',
            'herblore_xp', 'agility_xp', 'thieving_xp', 'slayer_xp', 'farming_xp',
            // Add or remove skills based on your application
        ];

        foreach ($skills as $skill) {
            $total += ExperienceHelper::getLevelForXp($this->$skill);
        }

        return $total;
    }
}
