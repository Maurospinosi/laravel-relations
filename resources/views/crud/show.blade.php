@extends('layout/layout')
@section('title')
    Laravel Migration Seeder(show)
@endsection

@section('body')
    <h2>Info Fumetto</h2>
    <ul>
        <li><strong>Autore: </strong>{{$comics->author}}</li>
        <li><strong>Numero volume: </strong>{{$comics->number}}</li>
        <li><strong>Numero pagine: </strong>{{$comics->pages}}</li>
        <li><strong>Edione : </strong>{{$comics->edition}}</li>
        <li><strong>Genere: </strong>{{$comics->genre}}</li>
        <li><strong>Tipo lettura: </strong>{{$comics->reading}}</li>
        <li><strong>Prezzo: </strong>{{$comics->price}} €</li>
        <li><strong>Colori: </strong>{{$comics->color}}</li>
        <li><strong>Data di rilascio: </strong>{{$comics->realase_date}}</li>
    </ul>
    <div id="turn" >
        <a href="{{route('comics.index')}}">Turn to List</a>   
    </div>
@endsection

