@extends('layouts.master')

@section('content')
    <div class="customer__booking">
        <div class="container-lg">
            <div class="customer__booking-box">
                <div class="row mb-4">
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
                <div class="customer__booking-box-list">
                    @include('common.errors')
                    <form action="{{ route('product-sell.condition.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @include('product-sell.partials.condition-form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
