@extends('layouts.master')

@section('content')
    <section class="login-page">
        <div class="container-lg">
            <div class="row">
                <div class="col-md-8 col-lg-6 col-xxl-5 mx-auto">
                    <div class="auth-form">
                        <div class="default-heading">
                            <h2>Forgot Password</h2>
                            <p>
                                Forgot your password? No problem. Just let us know your email address and we will email you
                                a password reset link that will allow you to choose a new one.
                            </p>
                        </div>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-4">
                                <div class="input-wrapper solid">
                                    <i class="bi bi-envelope-at"></i>
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" id="email" class="form-control "
                                        placeholder="your email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <button type="submit" class="primary-button w-100 mb-3">Send Password Reset Link</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
