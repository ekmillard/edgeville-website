<x-app-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="container super-narrow">
            <div class="wrapper p-4 p-lg-5">
                <div class="content-area">
                    <h1 class="h2 text-shadow text-white text-uppercase mb-3 text-center">
                        Forgot your password?
                    </h1>
                    <div class="login-form p-3 p-lg-5">
                        <div>
                            <x-input-label for="email" :value="__('EMAIL')" />
                            <x-text-input id="email" class="success w-100" type="text" name="email" :value="old('email')" required autofocus placeholder="Enter email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="w-100">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
