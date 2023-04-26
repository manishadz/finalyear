{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-2">
        Create a Product
        <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a>
    </h1>
    @include('common.errors')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('product.partials.form')
    </form>
</div>


@endsection
