@extends('layout')

@section('content')

  <div class="col-sm-8">
    <h2>
      Nueva Reparación
      <a href="{{ route('orders.index') }}" class="btn btn-default pull-right">Listado</a>
    </h2>

    @include('orders.fragment.error')

      {!! Form::open(['route' => 'orders.store']) !!}

          @include('orders.fragment.form')

      {!! Form::close() !!}
  </div>

  <div class="col-sm-4">
      @include('orders.fragment.aside')
  </div>
@endsection
