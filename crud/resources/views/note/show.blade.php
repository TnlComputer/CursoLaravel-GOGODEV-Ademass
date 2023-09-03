@extends('layouts.app')

@section('content')

@endsection
<a href="{{ route('note.index') }}">Back</a>

    <h2>{{ $note->title }} </h2>
    <p>{{ $note->description }}</p>


</body>
</html>
