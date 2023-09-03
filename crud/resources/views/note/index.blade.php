@extends('layouts.app')

@section('content')

@endsection
<a href="{{ route('note.create') }}">Create new Note</a>
<ul>
    @forelse($notes as $note)
        <l><a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> | <a href="{{ route('note.edit', $note->id) }}">Edit</a>| <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
    @empty

    <p>no hay datos</p>
    @endforelse

</ul>

</body>
</html>
