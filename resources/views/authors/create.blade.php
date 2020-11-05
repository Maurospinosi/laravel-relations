@extends('layout/layout')
@section('title')
    Laravel Migration Seeder Authors(create)
@endsection

@section('body')
<h2>Inserisci un Autore</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  action="{{route('authors.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="add-author">
        <label for="name">Nome</label>
    <input type="text" name="title" placeholder="Inserisci il nome...." id="name" value="{{old('name')}}">
    </div>
    <div class="add-author">
        <label for="lastname">Cognome</label>
        <input type="text" name="lastname" placeholder="Inserisci il cognome...." id="lastname" value="{{old('lastname')}}">
    </div>
    <div class="add-author">
        <label for="date_of_birth">Data di nascita</label>
        <input type="date" name="date_of_birth" placeholder="Inserisci la data di nascita...." id="date_of_birth" value="{{old('date_of_birth')}}">
    </div>
    <div class="add-author">
        <input type="submit" value="SAVE">
    </div>
</form>
<a class="add-author" href="{{route('authors.index')}}">Lista Autori</a>   
@endsection