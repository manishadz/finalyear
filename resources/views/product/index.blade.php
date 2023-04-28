@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h1>
                My Products
                <a href="{{ route('products.create') }}" class="btn btn-primary float-end"><span class="bi bi-plus"></span> Add Product</a>
            </h1>
            <table class="table table-striped my-4">
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
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success"><span class="bi bi-pencil"></span></a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="post"
                                    onclick="return confirm('Are you sure?')">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><span class="bi bi-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
