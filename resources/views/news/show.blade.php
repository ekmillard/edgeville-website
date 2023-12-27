<x-app-layout>
    <div class="container">
        <div class="wrapper p-4 p-lg-5">

            <!-- Annoucements -->
            <x-notice-bar/>

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
