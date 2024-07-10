{{-- @dd($products) --}}
@extends('layouts.app')

@section('main')
    <section>
        <div class="container-lg">
            <div class="row">
                @foreach ($products as $product)
                    @include('layouts.partials.product')
                @endforeach
            </div>
        </div>
    </section>
@endsection