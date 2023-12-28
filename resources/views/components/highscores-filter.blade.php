@php use App\Helpers\ExperienceHelper; @endphp
    <!-- Sidebar Cart -->
<div class="sidebar-hs hs-filters sidebar-container">
    <div class="section-title">
        <img src="{{asset('images/filter-icon.png')}}"> <span class="section-title-text">Filters</span>
    </div>
    @php
        $currentGameMode = request('game_mode', 'Regular');
        $currentSkill = request('skill');
    @endphp

    <div class="game-mode-dropdown dropdown p-4">
        <a class="game-mode-button dropdown-toggle" role="button" id="gameMode" data-bs-toggle="dropdown"
           aria-expanded="false">
            {{ $currentGameMode }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="gameMode">
            <li><a class="dropdown-item {{ $currentGameMode == 'Regular' ? 'active' : '' }}"
                   href="{{ route('highscores.index', ['game_mode' => 'Regular']) }}">Regular</a></li>
            <li><a class="dropdown-item {{ $currentGameMode == 'Ironman' ? 'active' : '' }}"
                   href="{{ route('highscores.index', ['game_mode' => 'Ironman']) }}">Ironman</a></li>
            <li><a class="dropdown-item {{ $currentGameMode == 'Hardcore Ironman' ? 'active' : '' }}"
                   href="{{ route('highscores.index', ['game_mode' => 'Hardcore Ironman']) }}">Hardcore Ironman</a></li>
            <li><a class="dropdown-item {{ $currentGameMode == 'Ultimate Ironman' ? 'active' : '' }}"
                   href="{{ route('highscores.index', ['game_mode' => 'Ultimate Ironman']) }}">Ultimate Ironman</a></li>
        </ul>
    </div>
    <div class="sidebar-section-title">SELECT CATEGORY</div>
    <div class="hiscores-cat p-4">
        <div class="hiscore-cat-icons">
            <div class="row justify-content-center">
                @foreach(ExperienceHelper::$SKILLS_TO_GIF as $skill => $gif)
                    <div class="col-auto">
                        <a class="col-auto {{ $currentSkill == $skill.'_xp' ? 'active' : '' }}"
                           href="{{ route('highscores.index', ['game_mode' => $currentGameMode, 'skill' => $skill.'_xp']) }}">
                            <img src="{{ asset('images/skills/' . $gif) }}" alt="{{ ucfirst($skill) }}">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
