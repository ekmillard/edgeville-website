<x-app-layout>
    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <div id="notice-bg" class="mb-3 mb-lg-5">
                <div id="notice-bar">
                    <p><span class="accent"><img src="{{asset('images/notice-icon.png')}}"/>Nex</span> has spawned in <b>level 15
                            of the Wilderness</b>. Kill her for increased drop percentages!</p>
                </div>
            </div>

            <div class="newspost-container">
                <div class="newspost-body">
                    <div class="post-info">
                        <div class="post-header" style="background:url('{{ Storage::disk('public')->url($newsPost->image) }}') no-repeat center center; background-size:cover;">
                            <h2>{{ $newsPost->title }}</h2>
                            <h4 class="date">{{ $newsPost->published_at->format('F d, Y') }}</h4>
                        </div>
                        {!! $newsPost->content !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
