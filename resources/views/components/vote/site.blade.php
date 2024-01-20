<div class="col-12 col-lg-6 col-xl-4">
    <div class="vote-item p-3 p-lg-4">
        <div class="toplist-img"><img src="{{ asset(Storage::url($site->image)) }}" alt="Vote Site Image"></div>

        @if($site->canVote)
            @php $voteUrl = str_replace('{username}', auth()->user()->username, $site->url); @endphp
            <a href="{{ $voteUrl }}">
                <div class="vote-btn btn_lg">Vote</div>
            </a>
        @else
            <div
                class="vote-btn btn_lg disabled"
                id="countdown-{{ $site->id }}"
                data-target-time="{{ $site->targetTime }}">
                Vote again in <span id="time-remaining-{{ $site->id }}"></span>
            </div>
        @endif
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const countdownElements = document.querySelectorAll('[id^="countdown-"]');

        countdownElements.forEach(function (element) {
            const targetTime = new Date(element.getAttribute('data-target-time'));
            const timeRemainingElement = document.querySelector('#time-remaining-' + element.id.split('-')[1]);

            const interval = setInterval(function () {
                const now = new Date();
                const difference = targetTime - now;

                if (difference <= 0) {
                    clearInterval(interval);
                    timeRemainingElement.textContent = 'You can vote now!';
                } else {
                    const hours = Math.floor(difference / 3600000);
                    const minutes = Math.floor((difference % 3600000) / 60000);
                    const seconds = Math.floor((difference % 60000) / 1000);
                    timeRemainingElement.textContent = hours + 'h ' + minutes + 'm ' + seconds + 's';
                }
            }, 1000);
        });
    });
</script>


