<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">

</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="{{ route('export') }}">Export CSV</a></li>
      </ul>
    </nav>
  </header>

  <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    <h3>Import CSV</h3>
    @csrf
    <input type="file" name="document_csv">
    <input type="submit" value="Import CSV">
  </form>
  <main>
    {{-- <h1>Product</h1> --}}
    @forelse($products as $product)
    <li> {{ $product->name }} - {{ $product->description }} - {{ $product->price }} </li>
    @empty
    <p>No data ...</p>

    @endforelse
  </main>
</body>
</html>
