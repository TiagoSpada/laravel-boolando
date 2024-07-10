<div class="product">
    {{-- IMMAGINE PRODOTTO (con gestione del mousehover) --}}
		<div class="immagine">
			 {{-- IMMAGINE VISUALIZZATA ALL'APERTURA DELLA PAGINA  --}}
            <img src="{{ Vite::asset('resources/img/'.$product["frontImage"]) }}" alt='immagine non trovata' >
			 {{-- IMMAGINE VISUALLITA CON L'HOVER DEL MOUSE  --}}
            <img src="{{ Vite::asset('resources/img/'.$product["backImage"]) }}" alt='immagine non trovata'  class="img-hover">
			{{-- BADGE DEL PRODOTTO  --}}
			<div class="label-product">
				{{-- PASSO L'ARRAY DEI BADGE E IN BASE AL TIPO ASSOCIO ALLO SPAN UNA CLASSE --}}
                @foreach (array_reverse($product['badges']) as $badge)
                    <span class=@if ($badge['type'] === 'tag')
                        "tag-label"
                    @elseif ($badge['type'] === 'discount')
                        "discount-label"
                    @endif
                    >{{$badge['value']}}</span>
                @endforeach ()
                     
			</div>
			 {{-- CUORE DELLA WISH LIST --}}
			<div class="wishlist"><i class="fas fa-heart"></i></div>
		</div>
		 {{-- INFORMAZIONE DEL PRODOTTO --}}
		<div class="information-product">
			<small class="brand">{{ $product['brand'] }}</small>
			<div class="product-type">{{ $product['name'] }}</div>
			<div class="price">
				{{ $product['price'] }} &euro;
			</div>
		</div>
	</div>