@extends('layouts.admin')

@section('content')
    <form 
        method="POST" 
        action="{{ route('admin.restaurants.store') }}" 
        enctype="multipart/form-data"  
        novalidate
        class="container-fluid d-flex flex-column"
    >
        {{-- Protezione dati --}}
        @csrf 
        {{-- Protezione dati --}}

        <div class="container d-flex p-4">
            <fieldset class="d-flex flex-column">
                <div>
                    <p class="font-medium">Informations</p>
                    <p class="text-xs">Put the information here to create a new restaurant</p>
                </div>

                <div class="d-flex flex-column">
                    <label for="name">Name</label>
                    <input type="text" class="rounded @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        @error('name') {{ $message }} @enderror
                    </div>

                    <label for="address">Address</label>
                    <input type="text" class="rounded @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}">
                    <div class="invalid-feedback">
                        @error('address') {{ $message }} @enderror
                    </div>

                    <label for="p_iva">P.Iva</label>
                    <input type="text" class="rounded @error('p_iva') is-invalid @enderror" id="p_iva" name="p_iva" value="{{ old('p_iva') }}">
                    <div class="invalid-feedback">
                        @error('p_iva') {{ $message }} @enderror
                    </div>

                    <label for="photo">Photo</label>
                    <input type="text" class="rounded @error('photo') is-invalid @enderror" id="photo" name="photo" value="{{ old('photo') }}">
                </div>

                <div class="col-span-full sm:col-span-6 mt-3">
                    <label for="typology" class="form-label" style="font-weight: 700; font-size: 20px">Typologies</label>
                    @foreach($typologies as $typology)
                        <div class="mb-3 form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="typology{{ $typology->id }}"
                                name="typologies[]"
                                value="{{ $typology->id }}"
                                @if (in_array($typology->id, old('typologies') ?: [])) checked @endif
                            >
                            <label class="form-check-label" for="typology{{ $typology->id }}">{{ $typology->name }}</label>
                        </div>
                    @endforeach
                </div>

                

                <div class="mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary mt-4">Create</button>
                </div>
            </fieldset>
        </div>
    </form>
@endsection
