@extends('layouts.master')

@section('content')
    <div class="customer__booking">
        <div class="container-lg">
            <div class="customer__booking-box">
                <div class="row">
                    <div class="col-sm-4">
                        <h4 class="xl-title fw-bold text-dark mb-4">
                            Find Your Perfect Price!
                        </h4>
                    </div>
                    <div class="col-sm-8">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-12 col-sm-6">
                                <a href="{{ route('products.index') }}" class="btn btn-primary float-end"><span
                                        class="bi bi-phone"></span> All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="change__password-box">
                            <p class="sm-title sub-title text-light-dark mb-4">
                               Fill your product condtion's information.
                            </p>
                            @include('common.errors')
                            <div class="row d-flex justify-content-between">
                                <div class="col-md-12">
                                    <form action="{{ route('product-sell.condition.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @include('product-sell.partials.condition-form')
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
