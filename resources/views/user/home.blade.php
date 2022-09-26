<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <h1> Welcome Home {{Auth::user()->name}}</h1>
    <form action="{{url('logout')}}" method="POST">
        @csrf
        <button style="margin-block-end: 100%; background: red" type="submit">
      </form>
      <i class="bi bi-box-arrow-right"></i>
      <span>Keluar</span>

      </button>
</head>
<body>
    
</body>
</html>