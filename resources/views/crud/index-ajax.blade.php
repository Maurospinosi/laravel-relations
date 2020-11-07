@extends('layout/layout')
@section('title')
    Laravel Migration Seeder (Ajax)
@endsection

@section('body')

<ul class=".ajax_list">

</ul>

<script id="comic-template" type="text/x-handlebars-template">
    <li>
        <h3>@{{title}}</h3>
        <img src="@{{cover}}" alt="@{{title}}"> <br>
        <a href="/comics/@{{id}}"><input type="submit" value="Scopri di più"></a>
    </li>
</script>

<a href="{{route('home')}}">Torna alla home</a> 
<script src="{{asset('js/app.js')}}"></script>
@endsection
