<x-app-layout>
    <div class="container super-narrow">
        <div class="wrapper p-4 p-lg-5">
            <div class="content-area">
                <h1 class="h2 text-shadow text-white text-uppercase mb-3 text-center">
                    Two-Factor authentication
                </h1>
                        <div class="card-body">
                            <p>Two factor authentication (2FA) strengthens access security by requiring two methods (also referred to as factors) to verify your identity. Two factor authentication protects against phishing, social engineering and password brute force attacks and secures your logins from attackers exploiting weak or stolen credentials.</p>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            Enter the pin from Google Authenticator app:<br/><br/>
                            <form class="form-horizontal" action="{{ route('2faVerify') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('one_time_password-code') ? ' has-error' : '' }}">
                                    <label for="one_time_password" class="control-label">One Time Password</label>
                                    <input id="one_time_password" name="one_time_password" class="form-control col-md-4"  type="text" required/>
                                </div>
                                <button class="btn btn-primary" type="submit">Authenticate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
