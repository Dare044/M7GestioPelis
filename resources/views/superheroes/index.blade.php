@extends('plantilla')
@section('content')
<div>        
        <h2>Llista de directors</h2>
    </div>
    <div>
	<a href="/formnewsuperhero">Nou director</a>
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
			<td>Nom del director</td>
			<td>nacionalitat</td>
			<td>Pelicula</td>
			<td>Operacions</td>
            </tr>
        </thead>

	@foreach($superherois as $superheroi)
	<tr>
	<td>{{ $superheroi->id }}</td>
		<td>{{ $superheroi->realname }}</td>
		<td>{{ $superheroi->nationality}}</td>
		<td>{{ $superheroi->planet->name }}</td>
		
		@if(Auth::user()->is_admin) 
		<td><a href="/deletesuperhero/{{ $superheroi->id }}">Esborrar</a></td>
		<td><a href="/updatesuperhero/{{ $superheroi->id }}">Actualitzar</a></td>
		@endif
	</tr>
	@endforeach
</table>

{{$superherois->links('pagination::bootstrap-4')}}

@endsection