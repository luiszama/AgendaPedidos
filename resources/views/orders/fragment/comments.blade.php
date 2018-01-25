<div class="form-group">
{!! Form::label('id_clientes', 'Cliente')!!}
{!! Form::text('id_clientes', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('id_equipos', 'Tipo de Equipo')!!}
{!! Form::text('id_equipos', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('id_services', 'Tipo de servicio')!!}
{!! Form::text('id_services', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('id_statuses', 'Estatus')!!}
{!! Form::text('id_statuses', 3, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('deadline', 'Fecha de entrega')!!}
{!! Form::date('deadline', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('desc', 'Comentario')!!}
{!! Form::text('desc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>
