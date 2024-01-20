@props(['user'])

<div class="content-box d-flex flex-column justify-content-center flex-sm-row justify-content-sm-between align-items-center gap-4 gap-sm-2 p-4 p-lg-5 mb-3 mb-lg-4">
    <div class="d-flex flex-column justify-content-center flex-sm-row justify-content-sm-start align-items-center gap-2 gap-lg-4">
        <div class="profile-picture rounded-circle overflow-hidden">
            <img src="{{ asset('images/avatar-large.jpg') }}" eager>
        </div>
        <div class="d-flex flex-column">
            <p class="h2 text-white">{{ $user->username }}</p>
            <p class="mb-0">Joined: {{ $user->created_at->format('m/d/Y') }}</p>
        </div>
    </div>
    <x-profile.logout-button/>
</div>
