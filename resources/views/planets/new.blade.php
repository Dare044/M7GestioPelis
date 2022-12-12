@extends('plantilla')
@section('content')

Afegir nova pelicula
<br><br>
<form method="POST" action="/saveplanet">
	
	@csrf
	Nom <input type="text" name="name" value="{{old('name')}}"> <br><br>
	Productora <input type="text" name="productora" value="{{old('productora ')}}"><br><br>
	Genere<input type="text" name="genere" value="{{old('genre ')}}"><br><br>
	<input type="submit" name="Desar">

</form>

@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
@endif

@endsection