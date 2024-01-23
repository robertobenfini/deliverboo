@extends('layouts.app')

@section('content')
    <form 
    method="POST" 
    action="{{ route('admin.restaurants.store') }}" 
    enctype="multipart/form-data"  
    novalidate
    class="container"
    >
        {{-- Per protezione dati --}}
        @csrf 
        {{-- Per protezione dati --}}

        <fieldset class="d-flex">
            <div class="">
                <p class="font-medium">Informations</p>
                <p class="text-xs">Put the information here to create a new restaurant</p>
            </div>
            <div>
                <div class="">
                    <label 
                    for="name" class="form-label" style="font-weight:700; font-size:20px">
                        Name
                    </label>
                    <input 
                    type="text" 
                    class=" rounded @error('name') is-invalid @enderror" 
                    id="name" 
                    name="name" 
                    value="{{ old('name')}}">
        
                    <div class="invalid-feedback">
                        @error('name') {{ $message }} @enderror
                    </div>
                </div>

                <div class="">
                    <label 
                    for="address" class="form-label" style="font-weight:700; font-size:20px">
                        Address
                    </label>
                    <input 
                    type="text" 
                    class=" rounded @error('address') is-invalid @enderror" 
                    id="address" 
                    address="address" 
                    value="{{ old('address')}}">
        
                    <div class="invalid-feedback">
                        @error('address') {{ $message }} @enderror
                    </div>
                </div>

                <div class="">
                    <label 
                    for="p_iva" class="form-label" style="font-weight:700; font-size:20px">
                        P. Iva
                    </label>
                    <input 
                    type="text" 
                    class=" rounded @error('p_iva') is-invalid @enderror" 
                    id="p_iva" 
                    p_iva="p_iva" 
                    value="{{ old('p_iva')}}">
        
                    <div class="invalid-feedback">
                        @error('p_iva') {{ $message }} @enderror
                    </div>
                </div>

                <div class="">
                    <label 
                    for="image" class="form-label" style="font-weight:700; font-size:20px">
                        Image
                    </label>
                    <input 
                    type="text" 
                    class=" rounded @error('image') is-invalid @enderror" 
                    id="image" 
                    image="image" 
                    value="{{ old('image')}}">
        
                    <div class="invalid-feedback">
                        @error('image') {{ $message }} @enderror
                    </div>
                </div>
            </div>

            <div class="">
                <button class="btn btn-primary">Create</button>
            </div>
        </fieldset>
    </form>
@endsection