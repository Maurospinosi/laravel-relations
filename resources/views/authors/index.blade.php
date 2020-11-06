@extends('layout/layout')
@section('title')
    Laravel Migration Seeder Authors
@endsection

@section('body')
<ul class="authors-list">
    @foreach ($authors as $item)
        <li>
            <div>Nome: {{$item->name}} </div>
            <div>Cognome: {{$item->lastname}}</div>
            <div>Data di nascita: {{$item->date_of_birth}}</div>
            <div>
                <form action="{{route('authors.destroy', $item->id)}}" method='POST'>
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </div>
        </li>
    @endforeach
    <li><a href="{{route('authors.create')}}">Inserisci un autore</a></li>
</ul>   
@endsection
