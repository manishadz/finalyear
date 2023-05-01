@extends('layouts.master')
@section('content')
    <section class="login-page">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xxl-5 mx-auto">
                    <div class="auth-form">
                        <div class="default-heading">
                            <h2>Login with credential!</h2>
                            <p>
                                Welcome! Please enter your login credentials to access your account.
                            </p>
                        </div>
                        @include('common.errors')
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <div class="input-wrapper solid">
                                    <i
                                        class="bi bi-envelope-at"style="
                                    margin-top: 24px;"></i>
                                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="your email"
                                        value="{{ old('email') }}"  autocomplete="email">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-wrapper solid">
                                    <i class="bi bi-key"style="
                                     margin-top: 24px;"></i>
                                    <label class="form-label" for="email">{{ __('password') }}</label>
                                    <input type="password" name="password" class="form-control" placeholder="your password"
                                         autocomplete="">
                                </div>
                            </div>
                            <button type="submit" class="primary-button w-100 mb-3">{{ __('Login') }}</button>
                        </form>
                        <div class="auth-link">
                            <a href="{{ route('register') }}"> Create an account </a>
                            <a href="{{ route('password.request') }}"> Forget Password </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</body>

</html>
