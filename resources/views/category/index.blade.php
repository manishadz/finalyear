{{-- list of category show garna form --}}

@extends('layouts.backend')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header" >
                    <h4>category</h4>
                    <a class="btn btn-primary href="{{  route('category.create') }}">create catgory</a>
                </div>
                {{-- <div class="card-body">

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

                </div> --}}
            </div>

        </div>
    </div>
</div>

</div>

@endsection
