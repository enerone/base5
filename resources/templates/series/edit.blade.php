@extends('layout')

@section('content')
    <h2>{{ $serie->titulo }}</h2>
    {!! Form::model($serie, ['route' => 'series.update',  $serie->slug, 'method'=>'PATCH']) !!}

        @include('series.form')

    {!! Form::close() !!}

    {!! delete_form(['series.destroy', $serie->slug]) !!}
@stop