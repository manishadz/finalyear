{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-2">Update a Product <a href="{{ route('products.index') }}" class="btn btn-secondary  float-end">Back</a></a></h1>
    <form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="">
        <div class="row">
            <div class="col">
                <label for="">Product Name</label><br>
                <input type="text" class="form-control" value="{{ $product->id }}" name="name" placeholder="">
            </div>
            <div class="col">
                <label for="">Category</label><br>
                <select class="form-control" name="category" value="{{ $product->category }}" >
                    <option>Art</option>
                    <option>car</option>
                    <option>phone</option>
                </select>
            </div>
        </div><br>
        <div class="mb-3">
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Mini-Price</label><br>
                <input type="number" class="form-control"value="{{ $product->min_price }}"  name="min_price" placeholder="">
            </div>
            <div class="col">
                <label for="">Max-price</label><br>
                <input type="number" class="form-control"value="{{ $product->max_price }}"  name="max_price" placeholder="">
            </div>
            <div class="col">
                <label for="">End-time</label>
                <input value="{{$product->end_time}}"  name="end_time" class="form-control" type="datetime-local" />
            </div>
        </div>
        <br>
        <div class="mb-3">
            <label for="">Upload Image</label>
            <input type="file" value=""  name="image" value=""
                class="course form-control">
                <br>
                <img src="{{ asset('uploads/product/'.$product->image) }}" alt="" height="200px" width="200">
        </div>
        <div class="mb-3 col d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update</button>


        </div>

    </form>
</div>

@endsection
