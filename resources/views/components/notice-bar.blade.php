@if($announcement)
    <div id="notice-bg" class="mb-3 mb-lg-5">
        <div id="notice-bar">
            <span class="accent"><img src="{{ asset('images/notice-icon.png') }}"/>Announcement: </span>
            <marquee behavior="scroll" direction="right">{!! $announcement->content !!}</marquee>
        </div>
    </div>
@endif
