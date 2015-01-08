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
                        {!! Form::model($serie, ['route' => '{{URL::route('series.edit',  $serie->slug)/ultimo'}},  $serie->slug, 'method'=>'GET']) !!}
                            {!! Form::text('ultimo') !!}
                            {!! Form::submit('ok!', ['class' =>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </td>
                    <td><span><a href="{{ URL::route('series.edit',  $serie->slug) }}" style="float:left;" class="btn btn-success">Edit</a></span> <span style="float:left;">|</span> <span> {!! delete_form(['series.destroy', $serie->slug]) !!}</span></td>
                </tr>
               @endforeach

        </tbody>
    </table>
@stop