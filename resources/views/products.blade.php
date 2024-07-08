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
            @include('shared.cards')
        </li>
        @endforeach

    </ul>

</div>
@endsection