@extends('layout')

@section('content')
    <h1>Series</h1>

    <h2>{{$serie->titulo}}</h2>

    @if($serie->temporadas)
        <article class="temporadas">
            <b>Temporadas:</b> {{ $serie->temporadas }}
        </article>
    @endif
    @if($serie->descripcion)
        <article class="descripcion">
            {!! nl2br($serie->descripcion) !!}
        </article>
    @endif
    {!! link_to('series', 'Volver') !!}
@stop