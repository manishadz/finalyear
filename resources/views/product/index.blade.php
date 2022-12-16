{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <h1>My Auctions <a href="{{ route('products.create') }}" class="btn btn-primary float-end   ">Add Product</a></h1>
<hr>



    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">min-price</th>
            <th scope="col">Max-price</th>
            <th scope="col">Endtime</th>
            <th scope="col">Images</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product )
          <tr>
            <th >{{ $product->id }}</th>
            <th >{{ $product->name }}</th>
            <th >{{ $product->category }}</th>
            <th >{{ $product->description }}</th>
            <th >{{ $product->min_price }}</th>
            <th >{{ $product->min_price }}</th>
            <th>{{ $product->end_time }}</th>
            <th><img src="{{ asset('uploads/product/' . $product->image) }}" height="60px;" width="60px;" alt="Image"></th>
                        <th>
                            <a href="{{ route('products.edit',$product->id) }}" class="btn btn-success">EDIT</a>
                            </th>
                            <th>
                                <form action="{{ route('products.destroy',$product->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                              </th>

          </tr>

          @endforeach

        </tbody>
      </table>
</div>

@endsection
