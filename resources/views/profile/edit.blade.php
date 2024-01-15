<x-app-layout>

    <div class="container">
        <div class="wrapper p-4 p-lg-5">
            <div class="content-area">

                <div class="row g-3 g-lg-5">
                    <div class="col-12 col-lg-8">
                        <div
                            class="content-box d-flex flex-column justify-content-center flex-sm-row justify-content-sm-between align-items-center gap-4 gap-sm-2 p-4 p-lg-5 mb-3 mb-lg-4">
                            <div
                                class="d-flex flex-column justify-content-center flex-sm-row justify-content-sm-start align-items-center gap-2 gap-lg-4">
                                <div class="profile-picture rounded-circle overflow-hidden">
                                    <img src="{{asset('images/avatar-large.jpg')}}" eager>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="h2 text-white">{{ auth()->user()->username }}</p>
                                    <p class="mb-0">Joined: {{auth()->user()->created_at->format('m/d/Y')}}</p>
                                </div>
                            </div>
                            <div class="btn btn-danger text-white gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <title>logout</title>
                                    <g fill="currentColor">
                                        <path
                                            d="M7.829,2.124A.5.5,0,0,0,7,2.5V5H4.5a.5.5,0,0,0-.5.5v1a.5.5,0,0,0,.5.5H7V9.5a.5.5,0,0,0,.829.376l4-3.5a.5.5,0,0,0,0-.752Z">
                                        </path>
                                        <path
                                            d="M2,12H5a1,1,0,0,0,0-2H2V2H5A1,1,0,0,0,5,0H2A2,2,0,0,0,0,2v8A2,2,0,0,0,2,12Z"
                                            fill="currentColor"></path>
                                    </g>
                                </svg>
                                Log Out
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 mb-3 mb-lg-4">
                            <div class="col">
                                <div
                                    class="content-box p-4 d-flex flex-column align-items-center justify-content-start text-center">

                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <p class="h5 text-white text-uppercase"> Rank:</p>
                                    </div>

                                    <p class="h5 mb-0 text-uppercase rank owner">Owner</p>
                                </div>

                            </div>
                            <div class="col">
                                <div
                                    class="content-box p-4 d-flex flex-column align-items-center justify-content-start text-center">

                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <p class="h5 text-white text-uppercase"> Total Votes:</p>
                                    </div>
                                    <div class="d-flex flex-row gap-2">
                                        <p class="h5 mb-0 text-primary text-uppercase">3</p>
                                        <a href="vote" data-bs-toggle="tooltip" data-bs-title="Add Votes">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                 viewBox="0 0 12 12"><title>export</title>
                                                <g stroke-width="1" fill="none" stroke="currentColor"
                                                   stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M11.5,11.5H2A1.5,1.5,0,0,1,.5,10V.5"></path>
                                                    <polyline points="6.5 0.5 11.5 0.5 11.5 5.5"
                                                              stroke="currentColor"></polyline>
                                                    <line x1="11.5" y1="0.5" x2="5.5" y2="6.5"
                                                          stroke="currentColor"></line>
                                                </g>
                                            </svg>
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="col">
                                <div
                                    class="content-box p-4 d-flex flex-column align-items-center justify-content-start text-center">

                                    <div class="d-flex flex-row align-items-center justify-content-start">
                                        <p class="h5 text-white text-uppercase"> Total Spent:</p>
                                    </div>

                                    <p class="h5 mb-0 text-primary text-uppercase">$360 USD</p>
                                </div>
                            </div>
                        </div>
                        <section id="purchase-history">
                            <div class="content-box sidebar-container mb-3 mb-lg-4">
                                <div
                                    class="section-title d-flex flex-row justify-content-between align-items-center px-4 pt-3 pb-2">
                                    <div class="d-flex flex-row justify-content-start align-items-center gap-2">
                                        <img src="{{asset('images/purchase-history.png')}}">
                                        <span class="section-title-text">Purchase History</span>
                                    </div>
                                    <div class="d-flex flex-row align-items-center gap-2">
                                        <p class="mb-0 badge bg-dark">Total Orders: 2</p>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="table-style-1 table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col" style="width:10%;">Order ID</th>
                                                <th scope="col" style="width:20%;">Date</th>
                                                <th scope="col" style="width:50%;">Item name</th>
                                                <th scope="col" style="width:20%;">Amount</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-white">
                                                <td scope="row">1</td>
                                                <td>12/20/2023</td>
                                                <td>Sythe of Vitur</td>
                                                <td>$350 USD</td>
                                            </tr>
                                            <tr class="text-white">
                                                <td scope="row">2</td>
                                                <td>12/20/2023</td>
                                                <td>$5 Bonds</td>
                                                <td>$10 USD</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pagination justify-content-center float-none">
                                        <a href="#">
                                            <div class="hpgnum nav">&#171;</div>
                                        </a>
                                        <a href="#">
                                            <div class="hpgnum nav">&#8249;</div>
                                        </a>
                                        <a href="#">
                                            <div class="hpgnum active">1</div>
                                        </a>
                                        <a href="#">
                                            <div class="hpgnum">2</div>
                                        </a>
                                        <a href="#">
                                            <div class="hpgnum">3</div>
                                        </a>
                                        <a href="#">
                                            <div class="hpgnum nav">&#8250;</div>
                                        </a>
                                        <a href="#">
                                            <div class="hpgnum nav">&#187;</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Password Modal -->
    <div class="modal fade" id="editPassModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-white text-uppercase fs-4" id="exampleModalLabel">Edit Password</h1>
                    <button type="button" class="btn text-white bg-danger p-2" data-bs-dismiss="modal"
                            aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <title>e-remove</title>
                            <g fill="currentColor">
                                <path fill="currentColor"
                                      d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </div>
                <form action="">
                    <div class="modal-body p-3 p-lg-5">
                        <label class="mb-1 mb-lg-2 text-white">New Password</label>
                        <input class="success w-100 mb-3 mb-lg-4" type="password" placeholder="Enter New Password"
                               required>
                        <label class="mb-1 mb-lg-2 text-white">Repeat New Password</label>
                        <input class="success w-100 mb-2 mb-lg-2" type="password" placeholder="Re-enter New Password"
                               required>
                        <div class="error-notice w-100 m-0 mt-2">Passwords do not match.</div>
                        <hr class="my-3 my-lg-4">
                        <label class="mb-1 mb-lg-2 text-white">Current Password</label>
                        <input class="success w-100" type="password" placeholder="Enter Current Password" required>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn_text btn_danger px-4" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn_text btn_primary px-4">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Email Modal -->
    <div class="modal fade" id="editEmailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title text-white text-uppercase fs-4" id="exampleModalLabel">Edit Email Address
                    </h1>
                    <button type="button" class="btn text-white bg-danger p-2" data-bs-dismiss="modal"
                            aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <title>e-remove</title>
                            <g fill="currentColor">
                                <path fill="currentColor"
                                      d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z">
                                </path>
                            </g>
                        </svg>
                    </button>
                </div>

                <form action="">
                    <div class="modal-body p-3 p-lg-5">
                        <label class="mb-1 mb-lg-2 text-white">New Email Address</label>
                        <input class="success w-100" type="password" placeholder="Enter New Email" required>
                        <hr class="my-3 my-lg-4">
                        <label class="mb-1 mb-lg-2 text-white">Current Password</label>
                        <input class="success w-100" type="password" placeholder="Enter Current Password" required>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn_text btn_danger px-4" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="button" class="btn_text btn_primary px-4">
                            Save Changes
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>--}}
</x-app-layout>
