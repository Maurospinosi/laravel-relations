<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>

   @foreach ($data as $comic)
       <ul>
            <li>Titolo: {{$comic->title}}</li>
            <li>Titolo originale: {{$comic->original_title}}</li>
            <li>Editore: {{$comic->publisher}}</li>
            <li>Anno: {{$comic->year}}</li>
            <li>Numero: {{$comic->number}}</li>
            <li>Pagine: {{$comic->pages}}</li>
            <li>Prezzo: €{{$comic->price}}</li>
            <li><img src="{{$comic->img_cover}}" alt=""> </li>

       </ul>
   @endforeach

</body>
</html>