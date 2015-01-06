@extends('layout')

@section('content')
    <h1>Lista de series</h1>
    @foreach($series as  $serie)
        <li><a href="/series/{{$serie->slug}}">{{ $serie->titulo }}</a></li>
    @endforeach
@stop