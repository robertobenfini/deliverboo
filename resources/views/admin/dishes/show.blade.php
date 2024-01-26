@extends('layouts.admin')

@section('content')
    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $dish->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $dish->description }}</p>
                <p class="card-text"><strong>Ingredients:</strong> {{ $dish->ingredients }}</p>
                <p class="card-text"><strong>Price:</strong> {{ $dish->price }}€</p>
                <div class="d-flex justify-content-around">
                    <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-info">Change information</a>
                    <a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary">Back to Dishes</a>
                </div>
            </div>
        </div>
    </div>
@endsection
