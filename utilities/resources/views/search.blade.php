<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="post" action="{{  route('search') }}">

    @csrf
    <input type="text" placeholder="Type name to search" name="name" value="{{ old('name') }}">
    <input type="submit">
  </form>
</body>
</html>
