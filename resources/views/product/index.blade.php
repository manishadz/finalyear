@extends('layouts.master')

@section('content')
    <div class="customer__booking">
        <div class="container-lg">
            <div class="customer__booking-box">
                <div class="row mb-4">
                    <div class="col-sm-4">
                        <h4 class="xl-title fw-bold text-dark mb-4">
                            MY Products LIST
                        </h4>
                    </div>
                    <div class="col-sm-8">
                        <div class="row align-items-center justify-content-end">
                            <div class="col-12 col-sm-6">
                                <a href="{{ route('products.create') }}" class="btn btn-primary float-end"><span
                                        class="bi bi-plus"></span> Add
                                    Product</a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="customer__booking-box-list">
                    <ul class="m-0 p-0 all-hotel-listing list-style-type-none light-border-bottom-list list">
                        @foreach ($products as $product)
                            <li class="item">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 mb-4 mb-md-0">
                                        <div class="d-flex align-items-center">
                                            <div class="hotel-image-box">
                                                <img src="{{ asset('uploads/product/' . $product->image) }}"
                                                    alt="image of {{ $product->image }}" class="img-flui img-100-100">
                                            </div>
                                            <div class="text-start hotel-info ms-3">
                                                <p class="location mb-2">
                                                    {{$product->company}}
                                                </p>
                                                <h4 class="name mb-1">
                                                    {{ $product->name }}
                                                    ({{ $product->model }})
                                                </h4>
                                                <p class="location mb-2">
                                                    {{$product->end_time}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-2 booking-details">
                                        <div class="text-start">
                                            <div class="mb-2">
                                                <p class="sm-title text-light-dark mb-1">
                                                    Min Price
                                                </p>
                                                <h5 class="md-text text-dark mb-0">
                                                    {{ $product->min_price }}
                                                </h5>
                                            </div>
                                            <div class="mb-2">
                                                <p class="sm-title text-light-dark mb-1">
                                                    Max Price
                                                </p>
                                                <h5 class="md-text text-dark mb-0">
                                                    {{ $product->max_price }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-2 col-md-2 booking-details">
                                        <div class="text-start">
                                            <span class="approved-status">
                                               {{ @$product->users[$key]->pivot->bidding_amount}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="list-hotel-dropdown">
                                            <div class="d-flex justify-content-end">
                                                <div class="dropdown-start d-inline-block">
                                                    <img type="button"
                                                        src="{{ asset('assets/images/menu/menu (1).png') }}"
                                                        alt="menu-btn" data-bs-toggle="dropdown">
                                                    <ul class="dropdown-menu shadow-lg">
                                                        <li>
                                                            <a href="{{ route('products.edit', $product->id) }}" class="dropdown-item"><span class="bi bi-pencil"></span> Edit</a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('products.destroy', $product->id) }}" method="post"
                                                                onclick="return confirm('Are you sure?')">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="dropdown-item booking-edit"><span class="bi bi-trash"></span> Delete</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
