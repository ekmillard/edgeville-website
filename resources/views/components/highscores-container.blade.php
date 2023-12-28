@php use App\Helpers\ExperienceHelper; @endphp
<div class="container">
    <div class="wrapper p-4 p-lg-5">
        <div class="content-area row g-3 g-lg-5">
            <x-sidebar>
                <x-highscores-search/>
                <x-highscores-filter/>
            </x-sidebar>
            <div class="col-12 col-lg-8 col-xl-9">
                <section id="hiscores">
                    <div class="section-header row">
                        <h2 id="hiscores-header">
                            <img src="{{asset('images/hiscores-icon.png')}}" alt="Highscores Icon"/>
                            @if($skill == 'overall_xp')
                                {{ request('game_mode', 'All') }}-Time Overall Highscores
                            @else
                                {{ request('game_mode', 'Regular') .' '. ucfirst(str_replace('_xp', '', $skill)) }}
                                Highscores
                            @endif
                        </h2>
                    </div>
                    <div class="hiscores-container">
                        <div class="hiscores-table table-responsive-md">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="hiscores-rank rank" scope="col" style="width:10%;">Rank</th>
                                    <th class="hiscores-player" scope="col" style="width:50%;">Player Name</th>
                                    <th class="hiscores-level" scope="col" style="width:20%;">
                                        Total Level
                                    </th>
                                    <th class="hiscores-level" scope="col" style="width:20%;">
                                        @if($skill == 'overall_xp')
                                            Combat Level
                                        @else
                                            {{ ucfirst(str_replace('_xp', '', $skill)) }} Level
                                        @endif
                                    </th>
                                    <th class="hiscores-exp" scope="col" style="width:20%;">Experience</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($hiscores as $index => $highscore)
                                    <tr>
                                        <td class="rank">{{ ($hiscores->currentPage() - 1) * $hiscores->perPage() + $index + 1 }}</td>
                                        <td class="hiscores-username">
                                            <a href="{{ route('highscores.player', ['username' => $highscore->username]) }}">
                                                @if($highscore->game_mode != 'Regular')
                                                    <img src="{{asset('images/icons/'.$highscore->game_mode.'.png')}}"
                                                         alt="Rank Icon"/>
                                                @endif {{ $highscore->username }}
                                            </a>
                                        </td>
                                        <td class="hiscores-level">
                                            {{ $highscore->getTotalLevel() }}
                                        </td>
                                        <td class="hiscores-level">
                                            @if($skill == 'overall_xp')
                                                {{ ExperienceHelper::getCombatLevel($highscore) }}
                                            @else
                                                {{ ExperienceHelper::getLevelForXp($highscore->$skill) }}
                                            @endif
                                        </td>
                                        <td class="hiscores-exp">{{ number_format($highscore->$skill) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            {{ $hiscores->appends(['game_mode' => $gameMode, 'skill' => $skill])->links() }}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
