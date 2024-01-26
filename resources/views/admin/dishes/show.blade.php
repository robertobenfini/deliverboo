@extends('layouts.admin')

@section('content')
    <div class="container p-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $dish->name }}</h5>
                <p class="card-text"><strong>Description:</strong> {{ $dish->description }}</p>
                <p class="card-text"><strong>Ingredients:</strong> {{ $dish->ingredients }}</p>
                <p class="card-text"><strong>Price:</strong> {{ $dish->price }}€</p>
                <a href="{{ route('admin.restaurants.index') }}" class="btn btn-primary">Back to Dishes</a>
                <a href="" class="btn btn-info">Change information</a>
                <a href="" class="btn btn-danger">Delete Dishes</a>
            </div>
        </div>
    </div>
@endsection
