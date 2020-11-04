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
</ul>   
@endsection
