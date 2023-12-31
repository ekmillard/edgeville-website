@php use Illuminate\Support\Str; @endphp
<x-app-layout>
    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <x-notice-bar/>
            <div class="content-area row">
                <div class="col-12 col-lg-8 col-xl-9 pe-4">
                    <section id="news posts">
                        @foreach (\App\Models\NewsPost::latest()->get() as $post)
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
                </div>
                <div class="col-12 col-lg-4 col-xl-3">
                    <section id="sidebar">
                        <!-- Sidebar Discord -->
                        <div class="sidebar-discord sidebar-container">
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
