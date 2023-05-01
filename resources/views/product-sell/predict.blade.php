@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h1>
                Predict a Price
            </h1>
            @include('common.errors')
            <form action="{{ route('product-sell.predict.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('product-sell.partials.predict-form')
            </form>
        </div>
    </section>
@endsection
