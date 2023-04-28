@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h2 class="primary-title">Iphone Series</h2>
            <div class="row">
                @foreach ($apples as $apple)
                    <div class="col-12 col-md-6 col-xl-4 mb-4">
                        <a href="{{ route('product', $apple->id) }}" class="room-card gap d-block">
                            <div class="room-image">
                                <img src="{{ asset('uploads/product/' . $apple->image) }}"
                                    alt="photo of {{ $apple->image }}" />
                            </div>
                            <div class="room-info">
                                <div class="price">NPR {{ $apple->min_price }} <span class="text-muted">to</span> NPR
                                    {{ $apple->max_price }}</div>
                                <h3 class="room-name">{{ $apple->name }}</h3>
                                <p class="address">{{ $apple->end_time }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
