@extends('plantilla')
@section('content')

<div>        
        <h2>Llistat de pelicules</h2>
    </div>
    <div>
	<a href="/formnewplanet">Afegir Pelicula</a>
    </div>

	@if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif

	@if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

	<table class="table">
        <thead>
            <tr>
			<td>ID</td>
		<td>Name</td>
		<td>Afegida</td>
		<td>Productora</td>
		<td>Genere</td>
		<td>Operacions</td>
            </tr>
        </thead>

	@foreach($planetes as $planeta)
	<tr>
		<td>{{ $planeta->id }}</td>
		<td>{{ $planeta->name }}</td>
		<td>{{ $planeta->created_at }}</td>
		<td>{{ $planeta->productora }}</td>
		<td>{{ $planeta->genre }}</td>
		<td><a href="/deleteplanet/{{ $planeta->id }}">Esborrar</a></td>
		<td><a href="/updateplanet/{{ $planeta->id }}">Actualitzar</a></td>
		<td><a href="/showplanet/{{ $planeta->id }}">Mostrar</a></td>
	</tr>
	@endforeach
</table>

{{$planetes->links('pagination::bootstrap-4')}}

@endsection