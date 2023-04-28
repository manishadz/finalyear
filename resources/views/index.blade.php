@extends('layouts.master')

@section('content')
    <section class="hero">
        <div class="container-lg">
            <div class="col-12 mb-5">
                <div class="col-md-8 mx-auto">
                    <h1 class="hero-title">
                        Find the best deal in Nepal on our application</span>
                    </h1>
                    <div class="hero-description text-white text-center mb-5">
                        Enjoy the online booking features including last minute offer best prices booking history and much more from your dedicated account panel to manage your services.
                    </div>
                </div>
            </div>
        </div>
        <section class="hotels-tab pt-5">
            <div class="container-lg">
                <div class="content-wrapper">
                    <form action="http://satkaronline.test/search" method="get">
                        <div class="row align-items-end">
                            <div class="col-12  col-lg-10">
                                <div class="position-relative">
                                    <div class="input-wrapper solid">
                                        <i class="bi bi-phone"></i>
                                        <input type="text" name="destination" id="destination" class="form-control" placeholder="What are you looking for?">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <button class="large-btn">
                                    <i class="bi bi-search me-3"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>

    <section class="guest-houses cus-slick-slider">
        <div class="container-lg">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="primary-title">Explore our Apple Series</h2>
                <a href="{{ route('apple') }}" class="view-all-btn" style="font-size: 16px; font-weight:bold; text-decoration:none; color:rgb(240, 31, 59)">View All</a>
            </div>
               
                <div class="three-card-slider">
                    @foreach ($apples as $apple)
                        <a href="{{ route('product', $apple->id) }}" class="room-card gap">
                            <div class="room-image">
                                <img src="{{ asset('uploads/product/'.$apple->image)}}"
                                    alt="photo of {{$apple->image}}" />
                            </div>
                            <div class="room-info">
                                <div class="price">NPR {{ $apple->min_price }} <span class="text-muted">to</span> NPR {{ $apple->max_price }}</div>
                                <h3 class="room-name">{{ $apple->name }}</h3>
                                <p class="address">{{ $apple->end_time }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
        </div>
    </section>

    <section class="guest-houses cus-slick-slider">
        <div class="container-lg">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="primary-title">Explore our Samsung Series</h2>
                <a href="{{ route('samsung') }}" class="view-all-btn" style="font-size: 16px; font-weight:bold; text-decoration:none; color:rgb(240, 31, 59)">View All</a>
            </div>
               
                <div class="three-card-slider">
                    @foreach ($samsungs as $samsung)
                        <a href="{{ route('product', $samsung->id) }}" class="room-card gap">
                            <div class="room-image">
                                <img src="{{ asset('uploads/product/'.$samsung->image)}}"
                                    alt="photo of {{$samsung->image}}" />
                            </div>
                            <div class="room-info">
                                <div class="price">NPR {{ $samsung->min_price }} <span class="text-muted">to</span> NPR {{ $samsung->max_price }}</div>
                                <h3 class="room-name">{{ $samsung->name }}</h3>
                                <p class="address">{{ $samsung->end_time }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
        </div>
    </section>
@endsection
