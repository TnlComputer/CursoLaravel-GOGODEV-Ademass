@extends('layouts.app')

@section('content')

@endsection
<a href="{{ route('note.index') }}">Back</a>

<form action="{{  route('note.update', $note) }}" method="POST" >
    @csrf
    @method('put')

     <label for="title">Tittle</label>
     <input type="text" name="title" value="{{ $note->title }}">
    @error('title')
        <p style="color:red">{{ $message }} </p>
    @enderror
    

     <label for="description">Description</label>
     <input type="text" name="description" value="{{ $note->description }}">
    @error('description')
        <p style="color:red">{{ $message }} </p>
    @enderror

     <input type="submit" value="Update">
</form>

</body>
</html>
