<?php

namespace App\Http\Controllers;

use App\Helpers\ExperienceHelper;
use App\Models\Highscores;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HighscoreController extends Controller
{
    public function index(Request $request)
    {
        $gameMode = $request->input('game_mode', 'All');
        $skill = $request->input('skill', 'overall_xp');
        $username = $request->input('username');

        $query = Highscores::query();

        if ($gameMode !== 'All') {
            $query->where('game_mode', $gameMode);
        }

        if ($username) {
            $query->where('username', 'like', '%' . $username . '%');
        }

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

    public function autocompleteSearch(Request $request)
    {
        if ($request->ajax()) {
            $data = User::where('username', 'LIKE', $request->username . '%')
                ->get();

            $output = '';
            if (count($data) > 0) {
                $output = '<ul class="dropdown-menu" style="display: block; position: relative; z-index: 1">';
                foreach ($data as $row) {
                    $output .= '<li><a class="dropdown-item">'. htmlspecialchars($row->username, ENT_QUOTES, 'UTF-8') . '</a></li>';
                }
                $output .= '</ul>';
            } else {
                $output .= '<li><a class="dropdown-item">No results.</a></li>';
            }
            return $output;
        }
    }

}
