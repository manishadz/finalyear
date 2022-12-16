{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-2">Create a Product</h1>
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

@endsection
