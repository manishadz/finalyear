{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



{{-- <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>

                  <form action="{{ route('login') }}" method="post" class="mx-1 mx-md-2">
                    @csrf

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="email">{{ __('Email Address') }}</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="email">{{ __('password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg"> {{ __('Login') }}</button>

                      @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
                    </div>
                    <p class="text-center text-muted mt-5 mb-0">Don't Have an account? <a href="{{ route('register') }}"
                      class="fw-bold text-body"><u>Register Here</u></a></p>
                  </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
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
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <div class="input-wrapper solid">
                                    <i
                                        class="bi bi-envelope-at"style="
                                    margin-top: 24px;"></i>
                                    <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" class="form-control" placeholder="your email"
                                        value="{{ old('email') }}" required="" autocomplete="email">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-wrapper solid">
                                    <i class="bi bi-key"style="
    margin-top: 24px;"></i>
                                    <label class="form-label" for="email">{{ __('password') }}</label>
                                    <input type="password" name="password" class="form-control" placeholder="your password"
                                        required="" autocomplete="">
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
