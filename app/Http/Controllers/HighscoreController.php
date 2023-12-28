<?php

namespace App\Http\Controllers;

use App\Helpers\ExperienceHelper;
use App\Models\Highscores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HighscoreController extends Controller
{
    public function index(Request $request)
    {
        $gameMode = $request->input('game_mode', 'All');
        $skill = $request->input('skill', 'overall_xp');
        $username = $request->input('username');

        // Initialize the query
        $query = Highscores::query();

        // Modify here to ignore the game mode filter when 'All' is selected
        if ($gameMode !== 'All') {
            $query->where('game_mode', $gameMode);
        }

        if ($username) {
            $query->where('username', 'like', '%' . $username . '%');
        }

        // If you're sorting by a specific skill (other than overall XP), calculate the level from the XP for that skill.
        if ($skill != 'overall_xp') {
            $query->select('*', DB::raw(ExperienceHelper::getLevelForXp($skill) . ' AS level'))
                ->orderBy('level', 'desc')
                ->orderBy($skill, 'desc');
        } else {
            // If sorting by overall XP, use the overall level.
            $query->select('*', DB::raw(ExperienceHelper::getLevelForXp('overall_xp') . ' AS level'))
                ->orderBy('level', 'desc')
                ->orderBy('overall_xp', 'desc');
        }

        // Add the last_updated tiebreaker.
        $query->orderBy('updated_at', 'asc');

        $hiscores = $query->paginate(15);

        return view('highscores.index', compact('hiscores', 'gameMode', 'skill', 'username'));
    }


    public function showPlayer($username)
    {
        $highscore = Highscores::with('user')->whereHas('user', function($query) use ($username) {
            return $query->where('username', $username);
        })->first();

        if (!$highscore) {
            abort(404);
        }

        return view('highscores.show', compact('highscore'));
    }
}
