@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="card border-0 w-100 mb-3">
            <div class="card-body p-4 py-5">
                <div class="col-10 mx-auto">
                    <div class="mb-5">
                        <img src="{{ asset('images/password.png') }}" alt="change-password-icon" class="mb-3" />
                        <h2 class="fw-bold text-dark mb-3">Set a New Password</h2>
                        <p class="sm-title text-light-dark mb-0">
                            Please create a new password that you dont use on any
                            other site
                        </p>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-6">
                            <form action="{{ route('update-password') }}" method="post">
                                @csrf

                                <div class="col-12 mb-4">

                                    <label for="" class="default mb-2">Current Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="currentPassword" name="current_password"
                                        placeholder="Enter current password">
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="" class="default mb-2">New Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control light" name="password"
                                        placeholder="New Password" />
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-5">
                                    <label for="" class="default mb-2">Confirm Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control light" name="password_confirmation"
                                        placeholder="Confirm Password" />
                                </div>
                                <button type="submit" class="btn btn-primary btn-default">
                                    Change Password
                                </button>
                            </form>
                        </div>
                        <div class="col-5">
                            <h5 class="md-title text-dark mb-4">
                                Password Must Have :
                            </h5>
                            <p class="mb-2 sm-title text-light-dark">
                                at least 8 characters
                            </p>
                            <p class="mb-2 sm-title text-dark">
                                Include all of the folowing rules:
                            </p>
                            <ul class="password-requirement-list ms-4">
                                <li>An uppercase character</li>
                                <li>A lowercase character</li>
                                <li>A number</li>
                                <li>A special character</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
