{{-- create garna form --}}
@extends('layouts.backend')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>category</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>category</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="">
                            <div class="row">
                                <div class="col">
                                    <label for="">Title</label><br>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                            </div><br>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  ACTIVE
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                  IN ACTIVE
                                </label>
                              </div>
                              <br>
                            <div class="mb-3 col d-flex justify-content-between">
                                <a class="btn btn-secondary" href="{{  route('category.index') }}">Back-to-List</a>
                                <button type="Add" class="btn btn-primary">Add</button>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


@endsection
