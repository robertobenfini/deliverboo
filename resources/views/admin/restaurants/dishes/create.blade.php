@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('admin.restaurants.dishes.store') }}" enctype="multipart/form-data" novalidate
        class="container">
        {{-- Per protezione dati --}}
        @csrf
        {{-- Per protezione dati --}}

        <fieldset class="d-flex">
            <div class="">
                <p class="font-medium">Informations</p>
                <p class="text-xs">Put the information here to create a new dish</p>
            </div>
            <>
                <div class="">
                    <label for="name" class="form-label" style="font-weight:700; font-size:20px">
                        Name
                    </label>
                    <input type="text" class=" rounded @error('name') is-invalid @enderror" id="name" name="name"
                        value="{{ old('name') }}">

                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="description" class="form-label" style="font-weight:700; font-size:20px">
                        description
                    </label>
                    <input type="text" class=" rounded @error('description') is-invalid @enderror" id="description"
                        description="description" value="{{ old('description') }}">

                    <div class="invalid-feedback">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="">
                    <label for="ingredients" class="form-label" style="font-weight:700; font-size:20px">
                        ingredients
                    </label>
                    <input type="text" class=" rounded @error('ingredients') is-invalid @enderror" id="ingredients"
                        ingredients="ingredients" value="{{ old('ingredients') }}">

                    <div class="invalid-feedback">
                        @error('ingredients')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="">
                    <label for="price" class="form-label" style="font-weight:700; font-size:20px">
                        price
                    </label>
                    <input type="number" class=" rounded @error('price') is-invalid @enderror" id="price"
                        price="price" value="{{ old('price') }}">

                    <div class="invalid-feedback">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </div>
                </div>





                </div>

                <div class="">
                    <button class="btn btn-primary">Create</button>
                </div>
        </fieldset>
    </form>
@endsection
