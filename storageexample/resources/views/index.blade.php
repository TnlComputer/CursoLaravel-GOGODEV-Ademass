<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <a href="{{ route('create') }}">Create</a>
  <h3>Toda la informacion</h3>
  {{-- @foreach
    @endforeach --}}
  <ul>
    @forelse($infos as $info)
    {{-- formato local --}}
    {{-- <li><img src="{{ asset('images/'.$info->file_url) }}" width="100"></li> --}}

    {{-- formato storage --}}
    <li><img src="{{ asset('storage/images/'.$info->file_url) }}" width="100"></li>
    @empty
    <li>No data.</li>
    @endforelse

  </ul>
</body>
</html>
