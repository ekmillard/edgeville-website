@php use App\Helpers\ExperienceHelper; @endphp
<x-app-layout>

    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <div class="content-area row g-3 g-lg-5">
                <div class="col-12 col-lg-4 col-xl-3">
                    <section id="sidebar">
                        <!-- Sidebar Cart -->
                        <div class="sidebar-hs sidebar-container mb-3 mb-lg-4">
                            <div class="section-title">
                                <img src="{{asset('images/user-searchicon.png')}}"> <span
                                    class="section-title-text ms-2">Search Player</span>
                            </div>
                            <div class="search-player p-4">
                                <input type="text" placeholder="Search Player" class="w-100">
                                <a href="#" class="d-block w-100 input-submit hs-btn btn_lg text-center mt-3">
                                    Search
                                </a>
                            </div>
                        </div>
                        <x-highscores-filter/>
                    </section>
                </div>
                <div class="col-12 col-lg-8 col-xl-9">
                    <section id="hiscores">
                        <div class="section-header row">
                            <h2 id="hiscores-header">
                                <img
                                    src="{{asset('images/hiscores-icon.png')}}"/>{{ $highscore->user->username }}'s Highscores
                            </h2>
                        </div>

                        <div class="hiscores-container">
                            <div class="hiscores-table table-responsive-md">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="hiscores-rank rank" scope="col" style="width:33.33%;">Game Mode</th>
                                        <th class="hiscores-level" scope="col" style="width:33.33%;">Combat Level</th>
                                        <th class="hiscores-exp" scope="col" style="width:33.33%;">Total Level</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="rank"> @if($highscore->game_mode != 'Regular') <img src="{{asset('images/icons/'.$highscore->game_mode.'.png')}}" alt="Rank Icon"/> @endif</td>
                                        <td class="hiscores-level">{{ ExperienceHelper::getCombatLevel($highscore) }}</td>
                                        <td class="hiscores-exp">{{ $highscore->getTotalLevel() }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="hiscores-container">
                            <div class="hiscores-table table-responsive-md">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="hiscores-rank rank" scope="col" style="width:33.33%;">Skill</th>
                                        <th class="hiscores-level" scope="col" style="width:33.33%;">Level</th>
                                        <th class="hiscores-exp" scope="col" style="width:33.33%;">Experience</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(ExperienceHelper::$SKILLS_TO_GIF as $skill => $gif)
                                        <tr>
                                            <td class="rank"><img src="{{ asset('images/skills/' . $gif) }}"
                                                                  alt="{{ ucfirst($skill) }}"> {{ ucfirst($skill) }}
                                            </td>
                                            <td class="hiscores-level">{{ ExperienceHelper::getLevelForXp($highscore->{$skill . '_xp'}) }}</td>
                                            <td class="hiscores-exp">{{ number_format($highscore->{$skill . '_xp'}) }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
