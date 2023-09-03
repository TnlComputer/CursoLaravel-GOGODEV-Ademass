<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: bortder-box;
    }

    a {
      text-decoration: none;
      background-color: cadetblue;
      margin: 10px;
      padding: 15px;
      border-radius: 10px;
      color: #333;
      cursor: pointer;
    }

    a:hover {
      background-color: aquamarine;
    }

  </style>
</head>
<body>
  <a href="{{ route('mailMe') }}">Mail me</a>
</body>
</html>
