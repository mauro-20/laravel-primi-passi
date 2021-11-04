<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
  </head>
  <body>
    <h1>Hello Laravel!</h1>
    <h2>Benvenuti nel blog di {{$firstName}} {{$lastName}}</h2>
    <h4>Esperto in:</h4>
    <ul>
      @foreach ($skills as $skill)
      <li><a href="/{{$skill}}">{{$skill}}</a></li>  
      @endforeach
    </ul>
  </body>
</html>