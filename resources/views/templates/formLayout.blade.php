@extends('templates.layout')

{{-- @php
    if (isset($edit) && !empty($edit)){
        $method='PUT';
        $url = route('beers.update' , ['beer' => $beer->id]);
        $product= 'MODIFICA';
    }else{
        $method='POST';
        $url =route('beers.store');
        $product= 'INSERISCI';
    }
@endphp --}}

@section('content')
<div class="form-container">
    <hr>
    <h3 class="new-title">{{-- {{$product}} --}} Inserisci QUI una casa</h3>
    <hr>
    <form class="needs-validation" action="{{route('houses.store')}}" method="post" novalidate>
        @csrf
        @method('POST')

        <div class="form-group my-form">
            <label for="address_prefix">Prefisso Indirizzo</label>
            <input  class="form-control {{-- {{$errors->has('address_prefix') ? 'is-invalid' : '' }} --}}" type="text" name="address_prefix" placeholder="es. Via, Piazza, etc..." value="{{-- {{isset($house) ? $house->address_prefix : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('address_prefix')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="address">Indirizzo</label>
            <input class="form-control {{-- {{$errors->has('address') ? 'is-invalid' : '' }} --}}" type="text" name="address" placeholder="inserisci l'indirizzo" value="{{-- {{isset($house) ? $house->address : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('address')} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="number">Numero Civico</label>
            <input class="form-control {{-- {{$errors->has('number') ? 'is-invalid' : '' }} --}}" type="text" name="number" placeholder="Numero civico" value="{{-- {{isset($house) ? $house->number : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('number')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="city">Città</label>
            <input class="form-control {{-- {{$errors->has('city') ? 'is-invalid' : '' }} --}}" type="text" name="city" placeholder="Città" value="{{-- {{isset($house) ? $house->city : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('city')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="rooms">N° Stanze</label>
            <input class="form-control {{-- {{$errors->has('rooms') ? 'is-invalid' : '' }} --}}" type="text" name="rooms" placeholder="inserisci il numero di Camere" value="{{-- {{isset($house) ? $house->rooms : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('rooms')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="bath">N° di Bagni</label>
            <input class="form-control {{-- {{$errors->has('bath') ? 'is-invalid' : '' }} --}}" type="text" name="bath" placeholder="inserisci il numero di bagni" value="{{-- {{isset($house) ? $house->bath : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('bath')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="furniture">Arredamento</label>
            <input class="form-control {{-- {{$errors->has('furniture') ? 'is-invalid' : '' }} --}}" type="text" name="furniture" placeholder="Segnala se l'appartamento è arredato" value="{{-- {{isset($house) ? $house->furniture : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('furniture')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="price">Prezzo Mensile</label>
            <input class="form-control {{-- {{$errors->has('price') ? 'is-invalid' : '' }} --}}" type="text" name="price" placeholder="Inserisci il prezzo di affitto mensile" value="{{-- {{isset($house) ? $house->price : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('price')}} --}}
            </div>
        </div>
        <div class="form-group my-form">
            <label for="image">URL Immagine</label>
            <input class="form-control {{-- {{$errors->has('image') ? 'is-invalid' : '' }} --}}" type="text" name="image" placeholder="URL" value="{{-- {{isset($beer) ? $beer->image : ''}} --}}" required>
            <div class="invalid-feedback">
                {{-- {{$errors->first('image')}} --}}
            </div>
        </div>
        <button class="btn btn-primary" type="submit" value="Invia">Invia</button>
    </form>
</div>

@endsection
