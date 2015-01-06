@extends('layout')

@section('content')
<h2>Add a new series</h2>
{!! Form::open( ['route' => 'series.store']) !!}
    @include('series.form')
{!! Form::close() !!}
@stop