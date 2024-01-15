@php use App\Helpers\ExperienceHelper; @endphp
<x-app-layout>
    <x-container>
        <x-sidebar>
            <x-highscores.search/>
            <x-highscores.filter/>
        </x-sidebar>
        <div class="col-12 col-lg-8 col-xl-9">
            <x-highscores.header-section>
                {{ $highscore->username }}'s Highscores
            </x-highscores.header-section>
            <x-highscores.container>
                <x-highscores.table>
                    <thead>
                    <tr>
                        <th style="width:33.33%;">Game Mode</th>
                        <th style="width:33.33%;">Combat Level</th>
                        <th style="width:33.33%;">Total Level</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            @if($highscore->game_mode != 'Regular')
                                <img src="{{asset('images/icons/'.$highscore->game_mode.'.png')}}" alt="Rank Icon"/>
                            @else
                                Regular
                            @endif
                        </td>
                        <td>{{ ExperienceHelper::getCombatLevel($highscore) }}</td>
                        <td>{{ $highscore->getTotalLevel() }}</td>
                    </tr>
                    </tbody>
                </x-highscores.table>
            </x-highscores.container>

            <x-highscores.container>
                <x-highscores.table>
                    <thead>
                    <tr>
                        <th scope="col" style="width:33.33%;">Skill</th>
                        <th scope="col" style="width:33.33%;">Level</th>
                        <th scope="col" style="width:33.33%;">Experience</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(ExperienceHelper::$SKILLS_TO_GIF as $skill => $gif)
                        @if($skill != 'overall')
                            <tr>
                                <td>
                                    <img src="{{ asset('images/skills/' . $gif) }}" alt="{{ ucfirst($skill) }}"> {{ ucfirst($skill) }}
                                </td>
                                <td>{{ ExperienceHelper::getLevelForXp($highscore->{$skill . '_xp'}) }}</td>
                                <td>{{ number_format($highscore->{$skill . '_xp'}) }}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </x-highscores.table>
            </x-highscores.container>

        </div>
    </x-container>
</x-app-layout>
