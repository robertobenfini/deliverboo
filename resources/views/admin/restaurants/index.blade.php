@extends('layouts.admin')

@section('content')
    <div class="container p-3 d-flex flex-column justify-content-center align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center mb-4">
            @if (!$restaurant)
                <p>You don't have a restaurant yet. <a href="{{ route('admin.restaurants.create') }}">Create one</a>.</p>
            @else
                <p class="fs-5"><strong>Benvenuto: </strong> {{ $restaurant->name }}</p>
                <p class="fs-5"><strong>Partita iva: </strong>{{ $restaurant->p_iva }}</p>
                <p class="fs-5"><strong>Via: </strong>{{ $restaurant->address }}</p>
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

                <img class="w-50" src="{{ $restaurant->photo }}" alt="">

                <div class="d-flex gap-3">
                    <button class="btn btn-info mt-4">
                        <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="text-decoration-none text-white">Modifica informazioni</a>
                    </button>

                    <form   
                        class="d-inline-block" 
                        action="{{ route('admin.restaurants.destroy', ['restaurant'=> $restaurant->id]) }}" 
                        method="POST" 
                        onsubmit="return confirm('Sei sicuro di voler eliminare questo ristorante?');"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="button" class="mt-4 p-2 btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRestaurantModal">
                            Elimina Ristorante
                        </button>
                    </form>
                </div>
            </div>

            <!-- Modal for Restaurant Deletion -->
            <div class="modal" id="deleteRestaurantModal" tabindex="-1" aria-labelledby="deleteRestaurantModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteRestaurantModalLabel">Conferma Eliminazione Ristorante</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Sei sicuro di voler eliminare questo ristorante?</p>
                        </div>
                        <div class="modal-footer">
                            <!-- Close button -->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                            <!-- Submit button to delete the restaurant -->
                            <form action="{{ route('admin.restaurants.destroy', ['restaurant'=> $restaurant->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                @if ($restaurant->dishes && $restaurant->dishes->count() > 0)
                    <h4 class="text-center mb-4">Dishes</h4>
                    <ul class="d-flex gap-3">
                        @foreach ($restaurant->dishes as $dish)
                            <div class="card" style="width: 20rem;">
                                <!-- Existing card content -->

                                <div class="card-body">
                                    <!-- Existing card body content -->

                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-primary">Visualizza Piatto</a>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteDishModal{{$dish->id}}">
                                                Elimina
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal for Dish Deletion -->
                            <div class="modal" id="deleteDishModal{{$dish->id}}" tabindex="-1" aria-labelledby="deleteDishModalLabel{{$dish->id}}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteDishModalLabel{{$dish->id}}">Conferma Eliminazione Piatto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Sei sicuro di voler eliminare questo piatto?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <!-- Close button -->
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>

                                            <!-- Submit button to delete the dish -->
                                            <form action="{{ route('admin.dishes.destroy', ['dish'=> $dish->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Elimina</button>
                                            </form>
                                        </div>
                                    </div>
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
