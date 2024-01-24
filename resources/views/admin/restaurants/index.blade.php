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
            <img class="w-50" src="{{$restaurant->photo}}" alt="">
            {{-- Altri dettagli del ristorante possono essere visualizzati qui --}}
            <button class="btn btn-info mt-4">
                <a >Cambia le informazioni</a>
            </button>

            <form class="d-inline-block" action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo ristorante?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="font-semibold my-second-btn p-2 btn btn-danger">Elimina Ristorante</button>
            </form>
        @else
            <p>You don't have a restaurant yet.</p>
        @endif
    </div>
@endsection
