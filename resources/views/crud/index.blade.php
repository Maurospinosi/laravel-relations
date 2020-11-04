@extends('layout/layout')
@section('title')
    Laravel Migration Seeder
@endsection

@section('body')
    <ul>
        @foreach ($comics as $comic)
        <hr>
        <li>
            <h3>{{$comic->title}}</h3>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}"> <br>
            <a href="{{route('comics.show', $comic->id)}}"><input type="submit" value="Scopri di più"></a>
        </li>
        @endforeach
    </ul>    
@endsection
