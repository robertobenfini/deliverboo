@extends('layouts.admin')
@section('content')
    <div class="container p-3 d-flex flex-column justify-content-center align-items-center">
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

            @if ($restaurant->dishes && $restaurant->dishes->count() > 0)
                <h4>Dishes</h4>
                <ul>
                    @foreach ($restaurant->dishes as $dish)
                        <li>{{ $dish->name }} - {{ $dish->price }}€</li>
                        <button><a href="{{ route('admin.dishes.edit', $dish->id) }}">edit</a></button>
                        <form   
                            class="d-inline-block" 
                            action="{{ route('admin.dishes.destroy', ['dish'=> $dish->id]) }}" 
                            method=POST 
                            {{-- onsubmit="return confirm('Sei sicuro di voler eliminare questo ristorante?');" --}}
                        >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-4 p-2 btn btn-danger">Elimina</button>
                        </form>
                    @endforeach
                </ul>
            @else
                <p>Non ci sono piatti associati a questo ristorante. <a href="{{ route('admin.dishes.create') }}">Aggiungi un piatto</a>.</p>
            @endif
        @endif
    </div>
@endsection
