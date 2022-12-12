@extends('plantilla')
@section('content')

<?php
    if (isset($_REQUEST['gender'])) {
        $selected_choice = $_REQUEST['gender'];
    }
    else {
        $selected_choice = "none";
    }
?>

Nou Director
<br><br>
<form method="POST" action="/savesuperhero">
	
	@csrf
	Nom del Director<input type="text" name="realname" value="{{old('realname')}}"><br><br>
	Nacionalitat <select name="gender" id="gender">
		<option value="netherlands" @if( old('gender') == "netherlands") selected @endif >netherlands</option>
		<option value="USA" @if( old('gender') == "USA") selected @endif >USA</option>
		<option value="Espanya" @if( old('gender') == "Espanya") selected @endif >Espanya</option>
		<option value="Francia" @if( old('gender') == "Francia") selected @endif >Francia</option>
	</select><br><br>
	Pelicules <select name="planet_id" id="planet_id">
  		@foreach($planetes as $planeta)
		<option value="{{ $planeta->id }}" >{{ $planeta->name }}</option>
  		@endforeach
	</select><br><br>	
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