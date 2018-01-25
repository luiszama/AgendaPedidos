@extends('layout')

@section('content')

  <div class="col-sm-8">
    <h2>
    Comentario
      <a href="{{ route('orders.index') }}" class="btn btn-default pull-right">Listado</a>
    </h2>
@include('orders.fragment.error')

{!! Form::model($orders, ['route' => ['orders.update', $orders->id], 'method' => 'PUT']) !!}

@include('orders.fragment.comments')

{!! Form::close() !!}

  </div>

  <div class="col-sm-4">
      @include('orders.fragment.aside')
  </div>
@endsection
