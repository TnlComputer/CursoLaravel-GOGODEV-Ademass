@extends('layouts.app')

@section('content')

@endsection
<a href="{{ route('note.index') }}">Back</a>

<form action="{{  route('note.store') }}" method="POST" >
    @csrf
     <label for="title">Tittle</label>
     <input type="text" name="title">
    @error('title')
        <p style="color:red">{{ $message }} </p>
    @enderror
     <label for="description">Description</label>
     <input type="text" name="description">
    @error('description')
        <p style="color:red">{{ $message }} </p>
    @enderror
     <input type="submit" value="Create">
</form>

</body>
</html>
