@extends('layouts.admin')
@section('content')
    <div class="container p-3 d-flex flex-column justify-content-center align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center mb-4">
            @if (!$restaurant)
                <p>You don't have a restaurant yet. <a href="{{ route('admin.restaurants.create') }}">Create one</a>.</p>
            @else
                <p class="fs-5"><strong>Benvenuto: </strong> {{ $restaurant->name }}</p>
                <p class="fs-5"><strong>Partita iva: </strong>{{$restaurant->p_iva}}</p>
                <p class="fs-5"><strong>Via: </strong>{{$restaurant->address}}</p>
                <p class="mt-2 fs-5"><strong>Tipologie:</strong>
                    <span>
                        @foreach ($restaurant->typologies as $index => $typology)
                            {{ $typology->name }}
                            @if ($index < $restaurant->typologies->count() - 1)
                                , 
                            @endif
                        @endforeach
                    </span>
                </p>

                <img class="w-50" src="{{$restaurant->photo}}" alt="">

            <div class="d-flex gap-3">
                <button class="btn btn-info mt-4">
                    <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="text-decoration-none text-white">Modifica informazioni</a>
                </button>
                
                <form   
                    class="d-inline-block" 
                    action="{{ route('admin.restaurants.destroy', ['restaurant'=> $restaurant->id]) }}" 
                    method=POST 
                    {{-- onsubmit="return confirm('Sei sicuro di voler eliminare questo ristorante?');" --}}
                >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="mt-4 p-2 btn btn-danger">Elimina Ristorante</button>
                </form>
            </div>
        </div>

        <div class="container mt-5">
            @if ($restaurant->dishes && $restaurant->dishes->count() > 0)
            <h4 class="text-center mb-4">Dishes</h4>
            <ul class="d-flex gap-3">
                @foreach ($restaurant->dishes as $dish)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $dish->photo ? $dish->photo : 'https://media.istockphoto.com/id/1147544807/it/vettoriale/la-commissione-per-la-immagine-di-anteprima-grafica-vettoriale.jpg?s=612x612&w=0&k=20&c=gsxHNYV71DzPuhyg-btvo-QhhTwWY0z4SGCSe44rvg4=' }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $dish->name }}</h5>
                        <p class="card-text">{{ $dish->price }}€</p>
                        <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                @endforeach
            </ul>
            @else
            <p>Non ci sono piatti associati a questo ristorante. <a href="{{ route('admin.dishes.create') }}">Aggiungi un piatto</a>.</p>
            @endif
        </div>
        @endif
    </div>
@endsection
