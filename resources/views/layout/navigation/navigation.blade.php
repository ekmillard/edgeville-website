<div class="navbar__container mb-3 mb-xl-5">
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand is--mobile-logo d-flex d-lg-none" href="#">
                <img src="{{ asset('images/logo.png') }}" lazy>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <g stroke-linecap="square" stroke-width="2" fill="none" stroke="#ffffff" stroke-linejoin="miter"
                           class="nc-icon-wrapper" stroke-miterlimit="10">
                            <g class="js-nc-int-icon nc-int-menu-to-hide">
                                <line x1="3" x2="29" y1="8" y2="8" stroke="#ffffff"></line>
                                <line x1="3" x2="29" y1="16" y2="16"></line>
                                <line x1="29" x2="3" y1="24" y2="24" stroke="#ffffff"></line>
                            </g>
                            <style>
                            .nc-int-menu-to-hide {
                                --transition-duration: 0.4s
                            }

                            .nc-int-menu-to-hide :first-child,
                            .nc-int-menu-to-hide :last-child {
                                stroke-dasharray: 26;
                                stroke-dashoffset: 16;
                                transition: all var(--transition-duration) cubic-bezier(.17, .84, .44, 1)
                            }

                            .nc-int-menu-to-hide.nc-int-icon-state-b :first-child,
                            .nc-int-menu-to-hide.nc-int-icon-state-b :last-child {
                                stroke-dashoffset: 26;
                                opacity: 0
                            }

                            .nc-int-menu-to-hide.nc-int-icon-state-b :first-child {
                                transform: translateX(26px)
                            }

                            .nc-int-menu-to-hide.nc-int-icon-state-b :last-child {
                                transform: translateX(-26px)
                            }
                            </style>
                            <script>
                            function initIntIcon(i) {
                                i.classList.contains("js-nc-int-icon-loaded") || (i.classList.add(
                                    "js-nc-int-icon-loaded"), i.closest("svg").addEventListener("click",
                                    function (n) {
                                        i.classList.toggle("nc-int-icon-state-b")
                                    }))
                            }

                            for (var intIcons = document.getElementsByClassName("js-nc-int-icon"), i = 0; intIcons
                                .length > i; i++) initIntIcon(intIcons[i])
                            </script>
                        </g>
                    </svg>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul
                    class="navbar-nav m-auto row align-items-lg-center justify-content-lg-center align-content-lg-center w-100 mx-xl-4 mx-xxl-5">
                    <li class="col nav-item text-center">
                        <a class="nav-link text-uppercase px-2" href="#">Home</a>
                    </li>
                    @guest
                        <li class="col nav-item text-center">
                            <a class="nav-link text-uppercase px-2" href="{{route('register')}}">Register</a>
                        </li>
                    @endguest
                    @auth
                        <li class="col nav-item text-center">
                            <a class="nav-link text-uppercase px-2" href="register">Support</a>
                        </li>
                    @endauth
                    <li class="col nav-item text-center">
                        <a class="nav-link text-uppercase px-2" href="store">Store</a>
                    </li>
                    <li class="col-4 col-xl-4 nav-item nav-item--logo d-none d-lg-flex text-center">
                        <a class="nav-link navbar-brand w-100 m-0 p-0" href="#">
                            <img src="{{asset('images/logo.png')}}" class="m-auto w-100"/>
                        </a>
                    </li>
                    <li class="col nav-item text-center">
                        <a class="nav-link text-uppercase px-2" href="vote">Vote</a>
                    </li>
                    <li class="col nav-item text-center">
                        <a class="nav-link text-uppercase px-2" href="highscores">Hiscores</a>
                    </li>
                    <li class="col nav-item text-center">
                        <a class="nav-link text-uppercase px-2" href="#">Discord</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="navbar__play--container d-flex justify-content-center align-items-center mt-0 mb-5">
        <a href="play" class="navbar__play--button">
            <img src="{{asset('images/new-play-btn.png')}}" class="d-block m-auto" eager>
        </a>
    </div>
</div>
