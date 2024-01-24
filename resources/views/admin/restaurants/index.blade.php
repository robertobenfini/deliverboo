@extends('layouts.app')
@section('content')
    <div class="container">
        @if (!$restaurant)
            <button>
                <a href="{{ route("admin.restaurants.create") }}">Create your Restaurant</a>
            </button>
        @endif
        
        @if ($restaurant)
            <p>Your Restaurant: {{ $restaurant->name }}</p>
            {{-- Altri dettagli del ristorante possono essere visualizzati qui --}}
        @else
            <p>You don't have a restaurant yet.</p>
        @endif

        {{-- <form
            action=""
            data-template="{{ route('admin.restaurants.destroy', ['restaurant' => '*****'], ['restaurant'=> $restaurant->id]) }}"
            method="POST"
            class="d-inline-block"
            id="confirm-delete"
            >
            @csrf
            @method('delete')
                <button class="font-semibold my-second-btn p-2">Elimina Ristorante</button>
        </form> --}}
    </div>
@endsection
