<x-app-layout>
    <x-vote.container>
        @forelse($voteSites as $site)
            <x-vote.site :site="$site"/>
        @empty
            <div class="col-12">
                <h1 style="text-align: center">There are no active vote sites at the moment.</h1>
            </div>
        @endforelse
    </x-vote.container>
</x-app-layout>
