<div class="col-12 col-lg-4">
    <div class="content-box sidebar-container mb-3 mb-lg-4">
        <div
            class="section-title d-flex flex-row justify-content-between align-items-center px-4 pt-3 pb-2">
            <div class="d-flex flex-row justify-content-start align-items-center gap-2">
                <img src="{{asset('images/profile-edit.png')}}"> <span class="section-title-text">Profile
                                        Details</span>
            </div>
        </div>
        <div class="p-4">
            <div class="d-flex flex-column align-items-stretch gap-4 w-100">

                <div class="row align-items-stretch g-2">
                    <div class="col-12">
                        <label class="text-white">Email</label>
                    </div>
                    <div class="col-9">
                        <input class="w-100 mb-0" type="text"
                               placeholder="{{auth()->user()->email}}" disable
                               readonly>
                    </div>
                    <div class="col-3">
                        <div class="h-100 w-100" data-bs-toggle="tooltip"
                             data-bs-title="Edit Email">
                            <button type="button" class="btn btn-primary w-100 h-100 m-0"
                                    data-bs-toggle="modal" data-bs-target="#editEmailModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     viewBox="0 0 16 16">
                                    <title>pencil</title>
                                    <g fill="currentColor">
                                        <path
                                            d="M11.707.293a1,1,0,0,0-1.414,0l-9,9A1,1,0,0,0,1.02,9.8l-1,5A1,1,0,0,0,1.2,15.98l5-1a1,1,0,0,0,.511-.273l9-9a1,1,0,0,0,0-1.414Zm-6.2,12.786-3.233.647.647-3.233L8,5.414,10.586,8ZM12,6.586,9.414,4,11,2.414,13.586,5Z"
                                            fill="currentColor"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row align-items-stretch g-2">
                    <div class="col-12">
                        <label class="text-white">Password</label>
                    </div>
                    <div class="col-9">
                        <input class="w-100 mb-0" type="password" placeholder="**********" disable
                               readonly>
                    </div>
                    <div class="col-3">
                        <div class="h-100 w-100" data-bs-toggle="tooltip"
                             data-bs-title="Edit Password">
                            <button type="button" class="btn btn-primary w-100 h-100 m-0"
                                    data-bs-toggle="modal" data-bs-target="#editPassModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                     viewBox="0 0 16 16">
                                    <title>pencil</title>
                                    <g fill="currentColor">
                                        <path
                                            d="M11.707.293a1,1,0,0,0-1.414,0l-9,9A1,1,0,0,0,1.02,9.8l-1,5A1,1,0,0,0,1.2,15.98l5-1a1,1,0,0,0,.511-.273l9-9a1,1,0,0,0,0-1.414Zm-6.2,12.786-3.233.647.647-3.233L8,5.414,10.586,8ZM12,6.586,9.414,4,11,2.414,13.586,5Z"
                                            fill="currentColor"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-box sidebar-container mb-3 mb-lg-4">
        <div
            class="section-title d-flex flex-row justify-content-between align-items-center px-4 pt-3 pb-2">
            <div class="d-flex flex-row align-items-center gap-2">
                <img src="{{asset('images/2fa.png')}}">
                <span class="section-title-text">2FA</span>
            </div>
            @if(auth()->user()->twoFactorSecurity == null || !auth()->user()->twoFactorSecurity->google2fa_enable)
                <p class="mb-0 badge bg-danger d-flex flex-row align-items-center gap-1">
                    <i class="fas fa-exclamation-triangle"></i>
                    Not Activated
                </p>
            @else
                <p class="mb-0 badge bg-success d-flex flex-row align-items-center gap-1">
                    <i class="fas fa-exclamation-triangle"></i>
                    Activated
                </p>
            @endif

        </div>
        <form method="GET" action="{{ route('2faSettings') }}">
            @csrf
            <div class="p-4">
                <p class="mb-1 text-white fw-bold">Why you should use 2-step verification</p>
                <p class="mb-0">
                    2-step verification drastically reduces the chances of having your account
                    stolen by
                    someone else. Why? Because hackers
                    would have to not only get your password and your username, they'd have to get a
                    hold of your phone.
                </p>
                <x-primary-button class="w-100 px-2 px-lg-4 mt-3 mt-lg-4">
                    @if(auth()->user()->twoFactorSecurity == null || !auth()->user()->twoFactorSecurity->google2fa_enable)
                        {{ __('Activate 2FA') }}
                    @else
                        {{ __('Remove 2FA') }}
                    @endif
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
