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
            <div class="d-flex flex-column">
                <label for="">Name</label>
                <input type="text" class="rounded @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                <div class="invalid-feedback">
                    @error('name') {{ $message }} @enderror
                </div>

                <label for="">Address</label>
                <input type="text" class="rounded @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
                <div class="invalid-feedback">
                    @error('address') {{ $message }} @enderror
                </div>

                <label for="">P.Iva</label>
                <input type="text" class="rounded @error('p_iva') is-invalid @enderror" id="p_iva" name="p_iva" value="{{ old('p_iva') }}">
                <div class="invalid-feedback">
                    @error('p_iva') {{ $message }} @enderror
                </div>

                <label for="">Photo</label>
                <input type="text" class="rounded @error('photo') is-invalid @enderror" id="photo" name="photo" value="{{ old('photo') }}">
            </div>
            <div class="col-span-full sm:col-span-6">
                <label for="typology" class="form-label"style="font-weight:700; font-size:20px">
                    Typologies
                </label>
                <select 
                class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900 form-select 
                @error('typology_id') is-invalid @enderror" 
                id="typology" 
                name="typology_id">
                    <option selected>
                        Change typology
                    </option>
    
                    @foreach ($typologies as $typology)
                        <option value="{{ $typology->id }}">{{ $typology->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">
                    @error('typology_id') {{ $message }} @enderror
                </div>
            </div>

            <div class="">
                <button class="btn btn-primary">Create</button>
            </div>
        </fieldset>
    </form>
@endsection