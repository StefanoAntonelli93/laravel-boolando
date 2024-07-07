<header>
    <div class="container-xl p-3">
        <div class="row">
            <div class="content d-flex justify-content-between align-items-center text-center">

                <div class="col">
                    <ul class=" d-flex justify-content-between align-items-center">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                    </ul>
                </div>
                <div class="col"> <img class="logo" src="{{ Vite::asset('resources/img/logo.jpg') }}" alt="pic">
                </div>
                <div class="col">
                    <ul class=" d-flex justify-content-between align-items-center">
                        <li>icona 1</li>
                        <li>icona 2</li>
                        <li>icona 3</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</header>