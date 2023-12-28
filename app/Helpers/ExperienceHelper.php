<?php

namespace App\Helpers;

class ExperienceHelper
{

    public static $GAME_MODES = ['Regular', 'Ironman', 'Hardcore Ironman', 'Ultimate Ironman'];

    public static $SKILLS = [
        'overall', 'attack', 'defence', 'strength', 'hitpoints', 'ranged',
        'prayer', 'magic', 'cooking', 'woodcutting', 'fletching', 'fishing',
        'firemaking', 'crafting', 'smithing', 'mining', 'herblore', 'agility',
        'thieving', 'slayer', 'farming'
    ];

    private static $EXPERIENCE_TABLE = [];


    public static $SKILLS_TO_GIF = [
        'overall' => 'overall.gif',
        'attack' => 'killsicon.gif',
        'defence' => 'deicon.gif',
        'strength' => 'sticon.gif',
        'hitpoints' => 'hiicon.gif',
        'ranged' => 'raicon.gif',
        'prayer' => 'pricon.gif',
        'magic' => 'maicon.gif',
        'cooking' => 'coicon.gif',
        'woodcutting' => 'wcicon.gif',
        'fletching' => 'flicon.gif',
        'fishing' => 'fiicon.gif',
        'firemaking' => 'fricon.gif',
        'crafting' => 'cricon.gif',
        'smithing' => 'smicon.gif',
        'mining' => 'miicon.gif',
        'herblore' => 'hericon.gif',
        'agility' => 'agicon.gif',
        'thieving' => 'thicon.gif',
        'slayer' => 'slicon.gif',
        'farming' => 'faicon.gif'
    ];

    public static function init()
    {
        if (empty(self::$EXPERIENCE_TABLE)) {
            self::generateExperienceTable();
        }
    }

    private static function generateExperienceTable()
    {
        $points = 0;
        for ($lvl = 1; $lvl <= 99; $lvl++) {
            $points += floor($lvl + 300.0 * pow(2.0, $lvl / 7.0));
            $output = $points >> 2;
            self::$EXPERIENCE_TABLE[$lvl] = $output - 1;
        }
    }

    public static function getLevelForXp($experience)
    {
        self::init();

        if ($experience >= self::$EXPERIENCE_TABLE[99]) {
            return 99;
        }
        for ($level = 99; $level >= 0; $level--) {
            if (self::$EXPERIENCE_TABLE[$level] < $experience) {
                return $level + 1;
            }
        }
        return 1;
    }


    public static function getCombatLevel($highscore)
    {
        $attack = self::getLevelForXp($highscore->attack_xp);
        $defence = self::getLevelForXp($highscore->defence_xp);
        $strength = self::getLevelForXp($highscore->strength_xp);
        $hitpoints = self::getLevelForXp($highscore->hitpoints_xp);
        $prayer = self::getLevelForXp($highscore->prayer_xp);
        $ranged = self::getLevelForXp($highscore->ranged_xp);
        $magic = self::getLevelForXp($highscore->magic_xp);

        $baseLevel = (($defence + $hitpoints + floor($prayer / 2.0)) * 0.25);
        $melee = ($attack + $strength) * 0.325;
        $ranger = floor($ranged * 1.5) * 0.325;
        $mage = floor($magic * 1.5) * 0.325;

        if ($melee >= $ranger && $melee >= $mage) {
            $baseLevel += $melee;
        } else if ($ranger >= $melee && $ranger >= $mage) {
            $baseLevel += $ranger;
        } else if ($mage >= $melee && $mage >= $ranger) {
            $baseLevel += $mage;
        }

        return (int) min(126, $baseLevel);
    }

    public static function getGif($skill) {
        return self::$SKILLS[$skill] ?? 'overall.gif';
    }
}
