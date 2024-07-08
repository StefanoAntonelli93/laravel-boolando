         <!-- carico le immagini dell'array implementando assets vite + chiave array -->
         <img class="cards-image" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="{{ $product['name'] }}">
         <div>{{ $product['brand'] }}</div>
         <div class="fw-semibold text-uppercase">{{ $product['name'] }}</div>
         <div class="discount-price fw-semibold pb-5">{{ $product['price'] }}</div>