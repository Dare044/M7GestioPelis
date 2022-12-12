@extends('plantilla')
@section('content')

	<div>        
        <h2>Llista d'actors</h2>
    </div>
    <div>
	<a href="/formnew">Nou actor</a>
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
			<td>Nom del actor</td>
			<td>Operacions</td>
            </tr>
        </thead>


	@foreach($poders as $poder)
	<tr>
		<td>{{ $poder->id }}</td>
		<td>{{ $poder->name }}</td>
		<td><a href="/delete/{{ $poder->id }}">Esborrar</a></td>
		<td><a href="/update/{{ $poder->id }}">Actualitzar</a></td>
	</tr>
	@endforeach
</table>

{{$poders->links('pagination::bootstrap-4')}}

@endsection