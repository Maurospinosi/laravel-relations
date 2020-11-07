@extends('layout/layout')
@section('title')
    Laravel Migration Seeder
@endsection

@section('body')
<ul>
    <li>
        <a href="{{route('comics.index')}}">Lista Fumetti</a>
    </li>
    <li>
        <a href="{{route('authors.index')}}">Lista Autori</a>
    </li>
    <li>
        <a href="{{route('index.ajax')}}">Ajax</a>
    </li>
</ul>
@endsection