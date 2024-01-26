@extends('layouts.admin')

@section('content')
<form 
method="POST" 
action="{{ route('admin.dishes.update', ['dish' => $dish]) }}" 
enctype="multipart/form-data" 
novalidate
class="container"
>
    {{-- Per protezione dati --}}
    @csrf
    {{-- Per protezione dati --}}
    @method('PUT')

<fieldset class="d-flex flex-column gap-3">
    <div class="">
        <p class="font-medium">Informations</p>
        <p class="text-xs">Put the information here to create a new dish</p>
    </div>
        <div class="">
            <label for="name" class="form-label" style="font-weight:700; font-size:20px">
                Name
            </label>
            <input type="text" class=" rounded @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $dish->name) }}">

            <div class="invalid-feedback">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="">
            <label for="description" class="form-label" style="font-weight:700; font-size:20px">
                Description
            </label>
            <input type="text" class=" rounded @error('description') is-invalid @enderror" id="description"
               name="description" value="{{ old('description', $dish->description) }}">

            <div class="invalid-feedback">
                @error('description')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="">
            <label for="ingredients" class="form-label" style="font-weight:700; font-size:20px">
                Ingredients
            </label>
            <input type="text" class=" rounded @error('ingredients') is-invalid @enderror" id="ingredients"
                name="ingredients" value="{{ old('ingredients', $dish->ingredients) }}">

            <div class="invalid-feedback">
                @error('ingredients')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="">
            <label for="price" class="form-label" style="font-weight:700; font-size:20px">
                Price
            </label>
            <input type="number" class=" rounded @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ old('price', $dish->price) }}">

            <div class="invalid-feedback">
                @error('price')
                    {{ $message }}
                @enderror
            </div>
        </div>

        <div class="">
            <label for="visible" class="form-label" style="font-weight:700; font-size:20px">
                Visible
            </label>
            <input type="checkbox" class=" rounded @error('visible') is-invalid @enderror" id="visible"
                name="visible" 
                {{ $dish->visible ? 'checked' : '' }}
                >
            <div class="invalid-feedback">
                @error('visible')
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="">
            <button class="btn btn-primary">Change</button>
        </div>
    </div>   
</fieldset>
</form>
@endsection