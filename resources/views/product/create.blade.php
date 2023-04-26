{{-- list of category show garna form --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-2">
            Create a Product
            <a href="{{ route('products.index') }}" class="btn btn-secondary float-end">Back</a>
        </h1>
        @include('common.errors')
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('product.partials.form')
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Hide all phone models initially
            $('.phone-model').hide();

            // Show phone models based on the selected company
            $('#company-select').change(function() {
                var selectedCompany = $(this).val();

                if (selectedCompany === '') {
                    $('.phone-model').hide();
                } else {
                    $('.phone-model').each(function() {
                        if ($(this).data('company') === selectedCompany) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            });
        });
    </script>
@endpush
