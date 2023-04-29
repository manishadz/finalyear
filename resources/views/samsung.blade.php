@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h2 class="primary-title">Samsung Series</h2>
            <div class="row">
                @foreach ($samsungs as $samsung)
                    <div class="col-12 col-md-6 col-xl-4 mb-4">
                        <a href="{{ route('product', $samsung->id) }}" class="room-card gap d-block">
                            <div class="room-image">
                                <img src="{{ asset('uploads/product/' . $samsung->image) }}"
                                    alt="photo of {{ $samsung->image }}" />
                            </div>
                            <div class="room-info">
                                <div class="price"style="color: rgba(0, 88, 37, 0.527)">Starts from NRS:{{ $samsung->min_price }}</div>
                                <h3 class="room-name">{{ $samsung->name }}</h3>
                                <p> Ends In: <span class="text-danger">{{ $samsung->end_time }}</span></p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
