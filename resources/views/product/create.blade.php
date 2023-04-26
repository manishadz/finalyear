{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-2">Create a Product <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a></a></h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="">
        <div class="row">
            <div class="col">
                <label for="">Product Name</label><br>
                <input type="text" class="form-control"  name="name" placeholder="">
            </div>
            <div class="col">
                <label for="">Category</label><br>
                <select class="form-control" name="category">
                    <option>Art</option>
                    <option>car</option>
                    <option>phone</option>
                </select>
            </div>
        </div><br>
        <div class="mb-3">
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="">Mini-Price</label><br>
                <input type="number" class="form-control" name="min_price" placeholder="">
            </div>
            <div class="col">
                <label for="">Max-price</label><br>
                <input id="max_price" type="number" class="form-control" name="max_price" value="{{isset($data['x']) ? $data['x'] : '' }}" placeholder="">
            </div>
            <div class="col">
                <label for="">End-time</label>
                <input name="end_time" class="form-control" type="datetime-local" />
            </div>
        </div>
        <br>
        <div class="mb-3">
            <label for="">Upload Image</label>
            <input type="file" name="image" value="" required
                class="course form-control">
        </div>
        <div class="mb-3 col d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Add</button>


        </div>

    </form>
</div>

<!-- <script>
    var requestOptions = {
    method: 'GET',
    redirect: 'follow'
    };

    fetch("http://localhost:8080/category-wise-news", requestOptions)
      .then(response => response.text())
      .then(result => {
        let data = result.main_key;
        if (data.length > -1) {
            //element ko id bata value inject garney mathe 
            // data.x 
            const max_price = document.getElementById("max_price");
            max_price.value = data.x; // 10.5

        }
        console.log(data);
      })
      .catch(error => console.log('error', error));

      // using jquery 
      var settings = {
        "url": "{{url}}/category-wise-news",
        "method": "GET",
        "timeout": 0,
      };
      
      $.ajax(settings).done(function (response) {
        console.log(response);
      });
</script> -->

@endsection
