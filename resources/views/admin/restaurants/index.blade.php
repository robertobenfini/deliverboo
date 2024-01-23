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
    </div>
@endsection
