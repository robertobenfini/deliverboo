@extends('layouts.admin')
@section('content')
    <div class="container p-3">
        <h2>{{ $restaurant->name }} Dishes</h2>

        @if ($dishes->count() > 0)
            @foreach($dishes as $dish)
                <div>
                    <p>{{ $dish->name }}</p>
                    <p>{{ $dish->description }}</p>
                    <p>{{ $dish->price }}</p>
                </div>
            @endforeach
        @else
            <p>No dishes available for {{ $restaurant->name }}.</p>
        @endif
    </div>
@endsection
