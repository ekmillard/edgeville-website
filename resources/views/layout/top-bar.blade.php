<div class="topbar py-2 py-lg-3 w-100 position-relative">
    <div class="container">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2">
            <div>
                @auth
                    <p class="mb-0">Welcome back to Edgeville, <a class="welcome-name"
                                                                  href="#">{{ auth()->user()->username }}</a></p>
                @endauth
            </div>

            <div class="profile-side">
                <div class="dropdown p-0 m-0">
                    @auth
                        <button
                            class="bg-transparent my-0 text-white d-flex flex-row justify-content-end align-items-center gap-2 dropdown-toggle"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('images/avatar.jpg') }}" class="profile-avatar rounded-circle" lazy>
                            {{ auth()->user()->username }}
                        </button>
                        <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <title>user</title>
                                        <g stroke-width="1" fill="none" stroke="#d3682c" stroke-linecap="round"
                                           stroke-linejoin="round">
                                            <path
                                                d="M14.5,12.976a1,1,0,0,0-.426-.82A10.367,10.367,0,0,0,8,10.5a10.367,10.367,0,0,0-6.074,1.656,1,1,0,0,0-.426.82V15.5h13Z"
                                                stroke="#d3682c"></path>
                                            <circle cx="8" cy="4" r="3.5"></circle>
                                        </g>
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <input type="hidden" name="name" value="value"/>
                                    <a onclick="this.parentNode.submit();"
                                       class="dropdown-item text-danger d-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             viewBox="0 0 16 16">
                                            <title>leave</title>
                                            <g stroke-width="1" fill="none" stroke="#dc3545" stroke-miterlimit="10"
                                               stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="8.5" y1="8.5" x2="15.5" y2="8.5" stroke="#dc3545"></line>
                                                <polyline points="12.5,5.5 15.5,8.5 12.5,11.5 "
                                                          stroke="#dc3545"></polyline>
                                                <polyline
                                                    points="8.5,4.5 8.5,0.5 0.5,0.5 0.5,11.5 5.5,15.5 5.5,5.5 0.5,0.5 "></polyline>
                                            </g>
                                        </svg>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    @endauth
                    @guest
                        <button
                            class="bg-transparent my-0 text-white d-flex flex-row justify-content-end align-items-center gap-2 dropdown-toggle"
                            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </button>
                        <ul class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="{{route('login')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <title>leave</title>
                                        <g stroke-width="1" fill="none" stroke="#339933" stroke-miterlimit="10"
                                           stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="8.5" y1="8.5" x2="15.5" y2="8.5" stroke="#339933"></line>
                                            <polyline points="12.5,5.5 15.5,8.5 12.5,11.5 " stroke="#339933"></polyline>
                                            <polyline
                                                points="8.5,4.5 8.5,0.5 0.5,0.5 0.5,11.5 5.5,15.5 5.5,5.5 0.5,0.5 "></polyline>
                                        </g>
                                    </svg>
                                    Login
                                </a>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
