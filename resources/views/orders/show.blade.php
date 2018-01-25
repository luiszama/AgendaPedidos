@extends('layout')

@section('content')

  <div class="col-sm-8">
      @foreach($orders as $order)
    <h2>
      {{ $order->deadline }}
    </h2>

    <p>
      {{ $order->equipo }},
      {{ $order->servicio }},
      {{ $order->estatus }}
    </p>

    <p>
      Cliente:
      {{ $order->name }}
      {{ $order->apellido }}
    </p>

      <p>
        Tipo de cliente:{{ $order->member }}
      </p>

      <p>
        ${!! $order->precio !!} ,
        {!! $order->desc !!}
      </p>
        @endforeach
  </div>

  <div class="col-sm-4">
      @include('orders.fragment.aside')
  </div>
@endsection
