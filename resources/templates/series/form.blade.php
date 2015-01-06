<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('temporadas', 'Temporadas:') !!}
    {!! Form::text('temporadas', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Actualizar Serie!', ['class' =>'btn btn-primary']) !!}
</div>