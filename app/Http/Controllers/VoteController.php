<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Vote;
use App\Models\VoteSite;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VoteController extends Controller
{
    public function index()
    {
        $voteSites = VoteSite::where('is_active', true)->get();
        $username = auth()->user()->username;

        foreach ($voteSites as $site) {
            $lastVote = Vote::where('vote_site_id', $site->id)
                ->where('username', $username)
                ->latest('voted_on')
                ->first();

            $site->canVote = true;
            $site->targetTime = null;

            if ($lastVote) {
                $nextVoteTime = $lastVote->voted_on->addHours($site->vote_interval);
                if (Carbon::now()->lessThan($nextVoteTime)) {
                    $site->canVote = false;
                    $site->targetTime = $nextVoteTime->toDateTimeString();
                }
            }

        }

        return view('vote.index', compact('voteSites'));
    }

    public function handleVote($vote_site_id, $username, Request $request)
    {
        $voterIP = $request->query('ip') ?? $request->ip();

        $voteSite = VoteSite::find($vote_site_id);
        if (!$voteSite) {
            Log::error("Vote site with ID {$vote_site_id} not found.");
            return response()->json(['status' => 'error', 'message' => 'Vote site not found'], 404);
        }

        $lastVote = Vote::where('vote_site_id', $vote_site_id)
            ->where('ip_address', $voterIP)
            ->latest('voted_on')
            ->first();

        $now = Carbon::now();
        if ($lastVote && $now->diffInHours($lastVote->voted_on) < $voteSite->vote_interval) {
            Log::info("Vote attempt blocked. User {$username} from IP {$voterIP} has already voted recently.");
            return response()->json(['status' => 'error', 'message' => 'You have already voted recently. Please wait for the next voting interval.'], 429);
        }

        Vote::create([
            'username' => $username,
            'vote_site_id' => $vote_site_id,
            'ip_address' => $voterIP,
            'voted_on' => $now,
            'claimed' => false,
        ]);

        Log::info("New vote recorded from {$voteSite->name}: User {$username} with IP {$voterIP}");

        return response()->json(['status' => 'success']);
    }
}
