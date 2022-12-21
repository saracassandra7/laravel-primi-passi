<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Home</title>
</head>
<body>
  <div class="container">
    <h1>{{$saluto}} {{$mondo}}</h1>

    <!-- esempio condizione -->
    @if ($stampa_paragrafo)
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos cumque minima maxime rem? Aliquam quo aut aspernatur aperiam quae quos molestiae quas! Sapiente esse eum quis, nihil consectetur ipsum necessitatibus repellendus, sit maxime voluptates nam ullam vitae laborum quod dignissimos repellat illo facilis, dicta illum doloremque! Culpa aspernatur consequuntur recusandae autem, labore saepe ducimus temporibus. Tempore dicta laudantium sit iste illo dolores exercitationem voluptate similique, expedita veniam non eius asperiores ad modi quas in deserunt ipsum voluptatum nihil! Quisquam impedit dolore voluptatum assumenda illum labore facilis similique perferendis quas officiis accusamus corrupti, accusantium est praesentium ipsa tenetur odio quis tempora.</p>

    @else
      <p>nessun paragrafo da stampare</p>
    @endif

    <!-- esempio ciclo foreach con condizione -->
    <ul>
      @foreach ($lista as $item)
        @if($loop->first)
          <li class="first">{{$item}}</li>
        
        @elseif($loop->last)  
          <li class="last">{{$item}}</li>

        @else
          <li>{{$item}}</li>  

        @endif  

      @endforeach
      
    </ul>

    <a href="/christmas-songs">CHRISTMAS SONGS</a>

  </div>

</body>
</html>