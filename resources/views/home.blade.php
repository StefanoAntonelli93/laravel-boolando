@extends('layouts.app')

<!-- cambio title -->
@section('page-title')
HOME-BOOLANDO
@endsection

@section('home')
<section>
    <div class="container">
        <div class="home content text-center py-5">
            <h1>{{ $title }}</h1>
            <h4>SCOPRI I NOSTRI <a href="{{ route('products') }}">PRODOTTI</a>
            </h4>
            <div class="col"> <img class="background py-5" src="{{ Vite::asset('resources/img/family.jpg') }}" alt="pic-family">
            </div>
        </div>
</section>
@endsection