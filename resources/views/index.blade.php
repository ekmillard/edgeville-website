@php use App\Models\NewsPost;use Illuminate\Support\Str; @endphp
<x-app-layout>
    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <x-notice-bar/>
            <div class="content-area row">
                <div class="col-12 col-lg-8 col-xl-9 pe-4">

                    <section id="news posts">
                        @foreach (NewsPost::latest()->get() as $post)
                            <div class="newspost-container">
                                <div class="newspost-body">
                                    <div class="post-info">
                                        <div class="post-header"
                                             style="background:url('{{ Storage::disk('public')->url($post->image) }}') no-repeat center center; background-size:cover;">
                                            <h2>{{ $post->title }}</h2>
                                            <h4 class="date">{{ $post->published_at ? $post->published_at->format('F d, Y') : 'Date not set' }}</h4>
                                        </div>
                                        <div class="ornament"></div>
                                        <div class="post-content">
                                            {{ Str::limit(trim(html_entity_decode(strip_tags($post->content))), 350, '...') }}
                                        </div>
                                        <div class="badge position- top-0 mt-3 d-block read-more-button">
                                            <a href="{{ route('news.show', $post) }}" class="btn btn-primary">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                    <div style="display: flex; justify-content: space-between;">
                        <x-info-box title="Game Activity">
                            <div class="hiscores-table table-responsive-md">
                                <table id="members-list" class="table">
                                    <thead>
                                    <tr>
                                        <th class="hiscores-rank rank" scope="col" style="width:10%;">Player</th>
                                        <th class="hiscores-rank rank" scope="col" style="width:10%;">Activity</th>
                                        <th class="hiscores-rank rank" scope="col" style="width:10%;">Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <!-- Replace with dynamic data as needed -->
                                    <tr>
                                        <td class="rank">Player1</td>
                                        <td class="rank">Completed Quest 'Dragon Slayer'</td>
                                        <td class="rank">10 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td class="rank">Player2</td>
                                        <td class="rank">Achieved Level 99 Cooking</td>
                                        <td class="rank">30 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td class="rank">Player2</td>
                                        <td class="rank">Achieved Level 99 Cooking</td>
                                        <td class="rank">30 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td class="rank">Player2</td>
                                        <td class="rank">Achieved Level 99 Cooking</td>
                                        <td class="rank">30 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td class="rank">Player2</td>
                                        <td class="rank">Achieved Level 99 Cooking</td>
                                        <td class="rank">30 mins ago</td>
                                    </tr>
                                    <tr>
                                        <td class="rank">Player2</td>
                                        <td class="rank">Achieved Level 99 Cooking</td>
                                        <td class="rank">30 mins ago</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </x-info-box>
                        <x-info-box title="Video of the Month">
                            <div class="video-container d-flex">
                                <iframe width="510" height="300" src="https://www.youtube.com/embed/0tGNlpJ45UU"
                                        title="*500+ REAL PLAYERS* THE IRONMEN GRIND CONTINUES! + 4 x UMB GIVEAWAY! [ALORA RSPS]"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </x-info-box>
                    </div>
                </div>


                <div class="col-12 col-lg-4 col-xl-3">
                    <section id="sidebar">
                        <div class="content-box sidebar-container">
                            <div class="section-title">
                                <img src="{{asset('images/discord-icon.png')}}"> <span class="section-title-text">Discord</span>
                            </div>
                            <div class="sidebar-body">
                                <div class="discord-widget">
                                    <div id="members-count"></div>
                                    <div class="scroll-placeholder"></div>
                                    <div class="discord-list-botshadow"></div>
                                    <div class="discord-list">
                                        <table id="members-list"></table>
                                    </div>
                                </div>
                                <div class="discord-connect">
                                    <a class="serif"
                                       onclick="javascript:window.open('INVITE LINK HERE'); return false;">
                                        <div class="btn_lg text-white">Join Discord</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
