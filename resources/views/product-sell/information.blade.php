@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h1>
                Fill Product Information
                <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a>
            </h1>
            @include('common.errors')
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('product-sell.partials.information-form')
            </form>
        </div>
    </section>
@endsection
