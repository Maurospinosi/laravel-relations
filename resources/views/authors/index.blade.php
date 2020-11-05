@extends('layout/layout')
@section('title')
    Laravel Migration Seeder Authors
@endsection

@section('body')
<ul class="authors-list">
    @foreach ($authors as $item)
        <li>
            <div>Nome: {{$item->name}}</div>
            <div>Cognome: {{$item->lastname}}</div>
            <div>Data di nascita: {{$item->date_of_birth}}</div>
        </li>
    @endforeach
    <a href="{{route('authors.create')}}">Inserisci un autore</a>
</ul>   
@endsection
