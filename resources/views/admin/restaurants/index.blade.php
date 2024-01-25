@extends('layouts.admin')
@section('content')
    <div class="container p-3 d-flex flex-column justify-content-center align-items-center">
        @if (!$restaurant)
            <button>
                <a href="{{ route("admin.restaurants.create") }}">Create your Restaurant</a>
            </button>
        @endif
        
        @if ($restaurant)
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
                
                <form class="d-inline-block" action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo ristorante?');">
                    @csrf
                    @method('DELETE')
                    <a type="submit" class="mt-4 p-2 btn btn-danger">Elimina Ristorante</a>
                </form>
            </div>
        @else
            <p>You don't have a restaurant yet.</p>
        @endif
    </div>

        @if ($restaurant && $restaurant->dishes->count() > 0)
            <h4>Dishes</h4>
            <ul>
                @foreach ($restaurant->dishes as $dish)
                    <li>{{ $dish->name }} - {{ $dish->price }}€</li>
                    
                @endforeach
            </ul>
        @else
            Non ci sono piatti associati a questo ristorante
        @endif
@endsection
