@extends('layouts.app')

<!-- cambio title -->
@section('page-title')
ABOUT-BOOLANDO
@endsection

@section('about')
<section class="vh-100 p-5">
    <!-- passo $title da web.php->$data -->
    <h1 class="pb-5">{{ $title }}</h1>
    <h2>Chi siamo</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia nihil cum placeat provident ratione. Provident cumque debitis totam laborum aliquid? Nulla, accusantium! Deleniti, ullam dicta! Inventore dicta similique recusandae doloremque?</p>
    <h2>Perchè scegliere Boolando</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia nihil cum placeat provident ratione. Provident cumque debitis totam laborum aliquid? Nulla, accusantium! Deleniti, ullam dicta! Inventore dicta similique recusandae doloremque?</p>
    <h2>I nostri sostenitori</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia nihil cum placeat provident ratione. Provident cumque debitis totam laborum aliquid? Nulla, accusantium! Deleniti, ullam dicta! Inventore dicta similique recusandae doloremque?</p>
</section>
@endsection