@extends('layout')

@section('content')

<div class="col-sm-9">
  <h2>Listado de Productos
    <a href="{{ route('orders.create') }}" class="btn btn-primary pull-right">Nuevo</a>
  </h2>

@include('orders.fragment.info')

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th width="20px">N°</th>
      <th>Fecha entrega</th>
      <th>Equipo</th>
      <th>Servicio</th>
      <th>Estado</th>
      <th colspan="3">&nbsp;</th>
    </tr>
  </thead>
    <tbody>
    @foreach($orders as $order)
    <tr>
        <td><strong>{{ $order->id}}</strong></td>
        <td><strong>{{ $order->deadline }}</strong></td>
        <td><strong>{{ $order->equipo }}</strong></td>
        <td><strong>{{ $order->servicio }}</strong></td>
        <td><strong>{{ $order->estatus }}</strong></td>
        <td>
          <a href="{{ route('orders.show', $order->id) }}">Ver</a>
        </td>
        <td>
          <a href="{{ route('orders.report', $order->id) }}">Proceso</a>
        </td>
        <td>
          <a href="{{ route('orders.edit', $order->id) }}">Finalizado</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! $orders->render() !!}
</div>


<div class="col-sm-3">
  @include('orders.fragment.aside')
</div>

@endsection
