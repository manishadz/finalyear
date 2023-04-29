@extends('layouts.master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section class="py-4">
    <div class="container-lg text-center">
        <i class="fa fa-check-square-o text-success  mb-3" aria-hidden="true" style="font-size:50px"></i>
        <h2 class="text-dark font-weight-bold">Thanks for registering !</h2>
        <p class="mb-0">Congratulations, your account has been successfully created.</p>
        <p>Please, Verify your email address by visiting your email account</p>
        <a href="/" class="btn btn-success">
            Back to Home
        </a>
    </div>
</section>
@endsection
