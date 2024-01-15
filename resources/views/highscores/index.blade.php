@php use App\Helpers\ExperienceHelper; @endphp
<x-app-layout>
    <x-container>
        <x-sidebar>
            <x-highscores.search/>
            <x-highscores.filter/>
        </x-sidebar>
        <div class="col-12 col-lg-8 col-xl-9">
            <x-highscores.header-section>
                @if($skill == 'overall_xp')
                    {{ request('game_mode', 'All-Time') }} Overall Highscores
                @else
                    {{ request('game_mode', 'Regular') .' '. ucfirst(str_replace('_xp', '', $skill)) }}
                    Highscores
                @endif

            </x-highscores.header-section>
            <x-highscores.container>
                <x-highscores.table>
                    <thead>
                    <tr>
                        <th style="width:10%;">Rank</th>
                        <th style="width:50%;">Player Name</th>
                        <th style="width:20%;">Total Level</th>
                        <th style="width:20%;">{{ $skill == 'overall_xp' ? 'Combat Level' : ucfirst(str_replace('_xp', '', $skill)) }}</th>
                        <th style="width:20%;">Experience</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hiscores as $index => $highscore)
                        <tr>
                            <td>{{ ($hiscores->currentPage() - 1) * $hiscores->perPage() + $index + 1 }}</td>
                            <td>
                                <a href="{{ route('highscores.player', ['username' => $highscore->username]) }}">
                                    @if($highscore->game_mode != 'Regular')
                                        <img src="{{asset('images/icons/'.$highscore->game_mode.'.png')}}" alt="Rank Icon"/>
                                    @endif
                                        {{ $highscore->username }}
                                </a>
                            </td>
                            <td>{{ $highscore->getTotalLevel() }}</td>
                            <td>{{ $skill == 'overall_xp' ? ExperienceHelper::getCombatLevel($highscore) : ExperienceHelper::getLevelForXp($highscore->$skill)}} </td>
                            <td>{{ number_format($highscore->$skill) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </x-highscores.table>
            </x-highscores.container>
        </div>
    </x-container>
</x-app-layout>
