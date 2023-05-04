@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="images p-3">
                                    <div class="text-center p-4 bg-image hover-zoom"> <img id="main-image"
                                            src="{{ get_image_url('product', $product->image) }}" width="450"  /> </div>
                                    {{-- <div class="thumbnail text-center"> <img onclick="change_image(this)"
                                            src="{{ asset('uploads/product/' . $product->image) }}" width="70"> <img
                                            onclick="change_image(this)"
                                            src="{{ asset('uploads/product/' . $product->image) }}" width="70"> </div> --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product p-4">
                                    <div class="mt-4 mb-3"> <span
                                            class="text-uppercase text-muted brand">{{ $product->category }}</span>
                                        <h5 class="text-uppercase">{{ $product->name }}</h5>
                                        <span class="fw-bolder ">NRS:</span> <span
                                            class="p-2">{{ $product->min_price }}-{{ $product->max_price }}</span>

                                    </div>
                                    <p class="about">{{ $product->description }}</p>
                                    <div class="sizes mt-5">
                                        <h6 class="fw-bold ">Ends in:<span class="item p-2"
                                                style="color: #ff0303">{{ $product->end_time }}</span></h6>
                                        <h6 class="fw-bold ">Highest bid:
                                            <span class="p-5">
                                                @if ($product->users_count > 0)
                                                    {{ $product->users[0]->pivot->bidding_amount }}
                                                @else
                                                    {{ $product->min_price }}
                                                @endif
                                            </span>
                                        </h6>
                                        <hr>
                                    </div>
                                    <div class="cart mt-4 align-items-center">

                                        {{-- check if user is authenticated --}}
                                        <div class="col">
                                            @auth
                                                @if (auth()->id() != $product->user_id)
                                                    <form action="{{ route('biddings.store') }}" method="post">
                                                        @csrf
                                                        <label for="">Bid Amount</label><br>
                                                        <input type="number" class="form-control" name="bidding_amount"
                                                            value=""
                                                            min="{{ $product->users_count > 0 ? $product->users[0]->pivot->bidding_amount : $product->min_price }}"
                                                            max="{{ $product->max_price }}">
                                                        <input type="hidden" class="form-control" name="product_id"
                                                            value="{{ $product->id }}">

                                                        <br>
                                                        <button type="submit" class="btn btn-primary d-grid gap-3">Bid Now</a>
                                                    </form>
                                                @else
                                                    <h5 class="text-danger text-center">This is your product</h5>
                                                @endif
                                            @endauth

                                            @guest
                                                <a href="{{ route('login') }}">you have to login </a>
                                            @endguest

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
