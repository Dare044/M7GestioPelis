@extends('plantilla')
@section('content')

Fitxa de la pelicula
<br><br>
<b>Name:</b> {{ $planeta->name }}</b><br><br>
<b>Repart:</b><br>

@foreach($planeta->superheroes as $super)
    <li>{{ $super->realname}}</li>
@endforeach

@endsection