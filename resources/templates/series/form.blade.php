<div class="form-group {{ $errors->has('titulo')? 'has-error' : '' }}" >
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class'=>'form-control']) !!}
    {!! $errors->first('titulo','<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('slug')? 'has-error' : '' }}">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
    {!! $errors->first('slug','<span class="help-block">:message</span>') !!}
</div>
<div class="form-group {{ $errors->has('temporadas')? 'has-error' : '' }}">
    {!! Form::label('temporadas', 'Temporadas:') !!}
    {!! Form::text('temporadas', null, ['class'=>'form-control']) !!}
    {!! $errors->first('temporadas','<span class="help-block">:message</span>') !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Actualizar Serie!', ['class' =>'btn btn-primary']) !!}
</div>