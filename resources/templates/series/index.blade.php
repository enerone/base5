@extends('layout')

@section('content')
    <h1>Lista de series</h1>
    <a href="{{ URL::route('series.create') }}" class="btn btn-success">Agregar serie</a>
    <table class="table">
        <thead>
        <th>Serie</th>
        <th>Temporadas</th>
        <th>Ultimo capitulo visto</th>
        <th>Herramientas</th>
        </thead>
        <tbody>

            @foreach($series as  $serie)
                <tr>
                    <td>{{ $serie->titulo }}</td>
                    <td>{{ $serie->temporadas }}</td>
                    <td>
                        {!! Form::open() !!}
                            {!! Form::text('ultimo') !!}
                        {!! Form::close() !!}
                    </td>
                    <td><span><a href="{{ URL::route('series.edit',  $serie->slug) }}" class="btn btn-success">Edit</a></span> <span>|</span> <span> {!! delete_form(['series.destroy', $serie->slug]) !!}</span></td>
                </tr>
               @endforeach

        </tbody>
    </table>
@stop