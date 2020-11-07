@extends('layout/layout')
@section('title')
    Laravel Migration Seeder (Lista fumetti)
@endsection

@section('body')
    <ul>
        @foreach ($comics as $comic)
        <hr>
        <li>
            <h3>{{$comic->title}}</h3>
            <img src="{{$comic->cover}}" alt="{{$comic->title}}"> <br>
            <a href="{{route('comics.show', $comic->id)}}"><input type="submit" value="Scopri di più"></a>
            <form action="{{route('comics.destroy', $comic->id)}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </form>
        </li>
        @endforeach
    </ul>
<a href="{{route('home')}}">Torna alla home</a>    
@endsection
