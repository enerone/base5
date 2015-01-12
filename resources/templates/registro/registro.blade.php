@extends('layout')

@section('content')
<h2>Registro de usuario</h2>
{!! Form::open( ['url' => 'Auth.AuthController.postRegister']) !!}
    <div class="form-group {{ $errors->has('name')? 'has-error' : '' }}" >
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group {{ $errors->has('emial')? 'has-error' : '' }}" >
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
    </div>
    <div class="form-group {{ $errors->has('emial')? 'has-error' : '' }}" >
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', null, ['class'=>'form-control']) !!}
        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Completar registro!!', ['class' =>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
@stop