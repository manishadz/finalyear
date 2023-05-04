@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h2 class="primary-title">Search Result</h2>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-6 col-xl-4 mb-4">
                        <a href="{{ route('product', $product->id) }}" class="room-card gap d-block">
                            <div class="room-image">
                                <img src="{{ get_image_url('product', $product->image) }}"
                                    alt="photo of {{ $product->image }}" />
                            </div>
                            <div class="room-info">
                                <div class="price"style="color: rgba(0, 88, 37, 0.527)">Starts from NRS: {{ $product->min_price }} </div>
                                <h3 class="room-name ">{{ $product->name }}</h3>
                                <p> Ends In: <span class="text-danger">{{ $product->end_time }}</span></p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
