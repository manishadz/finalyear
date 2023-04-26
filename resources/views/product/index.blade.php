{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-1">
            My Products
            <a href="{{ route('products.create') }}" class="btn btn-primary float-end">Add Product</a>
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Images</th>
                    <th scope="col">Name</th>
                    <th scope="col">Compay</th>
                    <th scope="col">Model</th>
                    <th scope="col">min-price</th>
                    <th scope="col">Max-price</th>
                    <th scope="col">Endtime</th>
                    <th scope="col">latest-bid</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('uploads/product/' . $product->image) }}" height="60px;" widtd="60px;"
                                alt="Image of product">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->company }}</td>
                        <td>{{ $product->model }}</td>
                        <td>{{ $product->min_price }}</td>
                        <td>{{ $product->min_price }}</td>
                        <td>{{ $product->end_time }}</td>
                        <td>{{ @$product->users[$key]->pivot->bidding_amount }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success">EDIT</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post"
                                onclick="return confirm('Are you sure?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
