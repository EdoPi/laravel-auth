@extends('templates.layout')


@section('content')
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$house->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$house->address_prefix}} {{$house->address}} {{$house->number}}</h5>
      <p class="card-text">
          <ul>
              <li><b>Città:</b> {{$house->city}}</li>
              <li><b>N°Stanze:</b> {{$house->rooms}}</li>
              <li><b>N°Bagni:</b> {{$house->bath}}</li>
              <li><b>Arredamento:</b> {{$house->furniture}}</li>
          </ul>

          <h3>{{$house->price}} €</h3>
      </p>
      <a href="/houses" class="btn btn-primary">BACK HOME</a>
      <a href="#" class="btn btn-primary">EDIT</a>
    </div>
  </div>
@endsection
