<div class="sidebar-hs sidebar-container mb-3 mb-lg-4">
    <div class="section-title">
        <img src="{{asset('images/user-searchicon.png')}}"> <span
            class="section-title-text ms-2">Search Player</span>
    </div>
    <div class="search-player p-4">
        <form action="{{ route('highscores.index') }}" method="GET">
            <input type="text" name="username" id="username" placeholder="Search Player" class="w-100" value="{{ request('username') }}">
            <div id="userList"></div>
            <button type="submit" class="d-block w-100 input-submit hs-btn btn_lg text-center mt-3">Search</button>
            <input type="hidden" name="game_mode" value="{{ request('game_mode', 'All') }}">
            <input type="hidden" name="skill" value="{{ request('skill', 'overall_xp') }}">
        </form>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        $('#username').on('keyup', function () {
            const query = $(this).val();
            if (query.length >= 2) {
                $.ajax({
                    url:"{{ route('autocomplete.search') }}",
                    type:"GET",
                    data:{'username':query},
                    success:function (data) {
                        $('#userList').html(data);
                    }
                });
            } else {
                $('#userList').html("");
            }
        });

        $(document).on('click', 'li', function(){
            const username = $(this).text();
            window.location.href = "{{ url('highscores/player') }}/" + username;
        });
    });
</script>
