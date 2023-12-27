<x-app-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="container narrow">
            <div class="wrapper p-4 p-lg-5">
                <div class="content-area">
                    <h1 class="h2 text-shadow text-white text-uppercase mb-3 text-center">
                        Register for Edgeville
                    </h1>
                    <div class="register-form p-3 p-lg-5">
                        <div class="register-form-section mb-4">
                            <div class="row row-cols-1 row-cols-md-2">
                                <div class="col">
                                    <x-input-label for="username" :value="__('Username')"/>
                                    <x-text-input id="username" class="success w-100" type="text" name="username"
                                                  :value="old('username')" required
                                                  autofocus autocomplete="username" placeholder="Enter Username"/>
                                    <x-input-error :messages="$errors->get('username')" class="mt-2"/>
                                </div>
                                <div class="col">
                                    <x-input-label for="email" :value="__('Email')"/>
                                    <x-text-input id="email" class="w-100" type="text" name="email"
                                                  :value="old('email')" required
                                                  autocomplete="username" placeholder="Enter Email"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>
                            </div>

                        </div>
                        <div class="register-form-section mb-4">
                            <div class="register-form-label">PASSWORD</div>

                                <x-text-input id="password" class="w-100"
                                              type="password"
                                              name="password"
                                              required autocomplete="new-password" placeholder="Enter Password"/>

                                <x-input-error :messages="$errors->get('password')" class="mt-2"/>

                                <x-text-input id="password_confirmation" class="error w-100"
                                              type="password"
                                              name="password_confirmation" required autocomplete="new-password"
                                              placeholder="Confirm Password"/>

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>


                        </div>
                      {{-- <!-- google recaptch -->
                       <div class="my-4 d-flex justify-content-start">
                           {!! NoCaptcha::renderJs() !!}
                           {!! NoCaptcha::display() !!}
                           <x-input-error :messages="$errors->get('g-recaptcha-response')" class="mt-2"/>
                       </div>--}}

                        <x-primary-button class="w-100">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
