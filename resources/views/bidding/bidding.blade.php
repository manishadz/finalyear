
@extends('layouts.app')

@section('content')

<div class="container">
    <h1>My Bidding list </h1>
<hr>



    <table class="table">
        <thead>
          <tr>
            <th scope="col">ProductName</th>

            <th scope="col">BidAmount</th>
            <th scope="col">Timestamp</th>
          </tr>
        </thead>
        {{-- <tbody>
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

          @endforeach --}}

        {{-- </tbody> --}}
      </table>
</div>

@endsection
