@extends('plantilla')
@section('content')
<div>
    <a href="{{ route('moves.index') }}">Back</a>
</div>
<div>
    <h2>Add New Move</h2>
</div>
    
   
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<div>
<form action="{{ route('moves.store') }}" method="POST">
    @csrf
  
    <div>
        <strong>Move Name:</strong>
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>           
        <strong>Description:</strong>
        <input type="text" name="description" value="{{ old('description') }}">
    </div>
 
    <div>
        <input type="submit" value="Save">
    </div>
    
</form>
</div>
@endsection