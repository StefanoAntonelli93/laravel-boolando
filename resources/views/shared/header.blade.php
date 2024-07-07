<header class="py-2">
    <div class="container-full py-3 px-5">
        <div class="row">
            <div class="content d-flex justify-content-between align-items-center text-center">

                <div class="col">
                    <ul class=" d-flex justify-content-start gap-3 align-items-center list-unstyled">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('products') }}">Prodotti</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
                <div class="col"> <img class="logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="pic">
                </div>
                <div class="col-4">
                    <ul class=" d-flex justify-content-end gap-3 align-items-center list-unstyled text-white">
                        <li><i class="fa-solid fa-bag-shopping"></i></li>
                        <li><i class="fa-solid fa-user-tie"></i></li>
                        <li><i class="fa-regular fa-heart"></i></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>