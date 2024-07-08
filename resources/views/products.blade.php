@extends('layouts.app')

<!-- cambio title -->
@section('page-title')
PRODOTTI-BOOLANDO
@endsection

@section('products')
<div class="container py-3">
    <h2 class="pt-3 pb-4">{{ $title }}</h2>
    <ul class="d-flex flex-wrap list-unstyled gap-3 justify-content-center">
        @foreach($dress as $product)
        <li>
            <!-- carico le immagini dell'array implementando assets vite + chiave array -->
            <img class="cards-image" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="{{ $product['name'] }}">
            <div>{{ $product['brand'] }}</div>
            <div class="fw-semibold text-uppercase">{{ $product['name'] }}</div>
            <div class="discount-price fw-semibold pb-5">{{ $product['price'] }}</div>
        </li>
        @endforeach

    </ul>

</div>
@endsection