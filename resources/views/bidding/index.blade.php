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
            <tbody>
                @foreach ($biddings as $bid)
                    <tr>
                        <th>{{ $bid->name }}</th>
                        <th>Rs:{{ $bid->pivot->bidding_amount }}</th>
                        <th>{{ $bid->pivot->created_at }}</th>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
