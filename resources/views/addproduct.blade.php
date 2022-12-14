@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">

                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="">
                        <div class="row">
                            <div class="col">
                                <label for="">Product Name</label><br>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col">
                                <label for="">Category</label><br>
                                <select class="form-control">
                                    <option>Art</option>
                                    <option>car</option>
                                    <option>phone</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="">Mini-Price</label><br>
                                <input type="number" class="form-control" placeholder="">
                            </div>
                            <div class="col">
                                <label for="">Max-price</label><br>
                                <input type="number" class="form-control" placeholder="">
                            </div>
                            <div class="col">
                                <label for="startDate">End-time</label>
                                <input id="startDate" class="form-control" type="date" />
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="">Upload Image</label>
                            <input type="file" name="image" value="" required
                                class="course form-control">
                        </div>
                        <div class="mb-3 col d-flex justify-content-between">
                            <button type="Add" class="btn btn-secondary">Back-to-list</button>
                            <button type="Add" class="btn btn-primary">Add</button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>



@endsection


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <br>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
