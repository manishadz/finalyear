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
                                <img src="{{ get_image_url('product', $apple->image) }}"
                                    alt="photo of {{ $apple->image }}" />
                            </div>
                            <div class="room-info">
                                <div class="price"style="color: rgba(0, 88, 37, 0.527)">Starts from NRS: {{ $apple->min_price }} </div>
                                <h3 class="room-name ">{{ $apple->name }}</h3>
                                <p> Ends In: <span class="text-danger">{{ $apple->end_time }}</span></p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
