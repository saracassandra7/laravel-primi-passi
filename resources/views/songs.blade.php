<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Christmas Songs</title>
</head>
<body>
  <div class="container">
    <h2> Christmas Songs</h2>

    @foreach($playlist as $song)
      <div class="box-song">
         <h3>{{$song['title']}}</h3>
         <span>{{$song['singer']}} - {{$song['year']}}</span>
      </div>

    @endforeach

    <a href="/">HOME</a>
  </div>  
  
</body>
</html>