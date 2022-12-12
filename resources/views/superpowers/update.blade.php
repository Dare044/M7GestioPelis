@extends('plantilla')
@section('content')

Actualitzar l'actor
<br><br>
<form method="POST" action="/update/{{ $poder->id }}">
	
	@csrf
	<input type="text" name="description" value="{{ old('description',$poder->description) }}">
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