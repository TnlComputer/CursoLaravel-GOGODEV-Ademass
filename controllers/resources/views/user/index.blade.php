<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>User list:</h1>
    <ul>
        @forelse($users as $user)
                <li>{{  $user->name}} -{{ $user->age }}</li>
        @empty
        <li>List empty</li>
        @endforelse
    </ul>

    {{-- @switch($age)
        @case(18)
            <h1>18 years old</h1>
            @break
        @case(19)
            <h1>19 years old</h1>
            @break
        @case(20)
            <h1>20 years old</h1>
            @break
            $@default
            <h1>Anote one</h1>
    @endswitch --}}
</body>
</html>



