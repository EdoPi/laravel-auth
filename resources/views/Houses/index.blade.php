@extends('templates.layout')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Prefisso Indirizzo</th>
        <th scope="col">Indirizzo</th>
        <th scope="col">N° Civico</th>
        <th scope="col">Città</th>
        <th scope="col">N° Stanze</th>
        <th scope="col">N° Bagni</th>
        <th scope="col">Arredamento</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Foto</th>
        <th scope="col"><a class="btn btn-primary" href="/houses/create">ADD NEW ITEM</a></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($houses as $house)
        <tr>
            <th scope="row">{{$house->id}}</th>
            <td>{{$house->address_prefix}}</td>
            <td>{{$house->address}}</td>
            <td>{{$house->number}}</td>
            <td>{{$house->city}}</td>
            <td>{{$house->rooms}}</td>
            <td>{{$house->bath}}</td>
            <td>{{$house->furniture}}</td>
            <td>{{$house->price}}</td>
            <td><img src="{{$house->image}}" style="width: 50px" alt=""></td>
            <td><a class="btn btn-success" href="houses/{{$house->id}}">Detail</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
