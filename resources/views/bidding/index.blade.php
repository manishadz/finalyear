@extends('layouts.master')

@section('content')
    <section class="guest-houses">
        <div class="container-lg">
            <h1>
                Bidding List
            </h1>
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Bid Amount</th>
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
    </section>
@endsection
