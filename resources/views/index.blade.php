@extends('layouts.master')

@section('content')
    <section class="hero">
        <div class="container-lg">
            <div class="col-12 mb-5">
                <div class="col-md-8 mx-auto">
                    <h1 class="hero-title">
                        Find the best Mobile deal in Nepal on our application</span>
                    </h1>
                    <div class="hero-description text-white text-center mb-5">
                        Unlock the value in your old phone with our mobile auction site.
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
                                <div class="price"style="color: rgba(0, 88, 37, 0.527)">Starts from NRS: {{ $apple->min_price }}</div>
                                <h3 class="room-name">{{ $apple->name }}</h3>
                                <p> Ends In: <span class="text-danger">{{ $apple->end_time }}</span></p>
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
                                <div class="price"style="color: rgba(0, 88, 37, 0.527)">Starts from NRS: {{ $samsung->min_price }}</div>
                                <h3 class="room-name">{{ $samsung->name }}</h3>
                                <p> Ends In: <span class="text-danger">{{ $samsung->end_time }}</span></p>
                            </div>
                        </a>
                    @endforeach
                </div>
        </div>
    </section>
@endsection
