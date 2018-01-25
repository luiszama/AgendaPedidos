<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cost;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\CostRequest;

class OrderController extends Controller
{
    public function index()
    {
      $orders = \DB::table('orders')
            ->select('orders.*','equipos.desc as equipo','services.desc as servicio','services.precio','statuses.desc as estatus')
            ->join('equipos','equipos.id','=','orders.id_equipos')
            ->join('services','services.id', '=', 'orders.id_services')
            ->join('statuses','statuses.id', '=', 'orders.id_statuses')
            ->orderBy('id','DESC')
            ->paginate();

      return view('orders.index',compact('orders'));
    }

    public function create()
    {
      $orders = \DB::table('clientes')
            ->select('id','name','apellido')
            ->get();
            // dd($orders);
    return view('orders.create',compact('orders'));
    }

    public function report($id)
    {
      return view('orders.report',compact('id'));
    }

    public function refac(CostRequest $request)
    {
      $cost = new Cost;
      $cost->id_orders = $request->id_orders;
      $cost->id_repais = $request->id_repais;
      $cost->save();

      $id = $request->id_orders;
      $order = \App\Order::find($id);
      $order->id_statuses = 2;
      $order->save();

      return redirect()->route('orders.index');
    }

    public function edit($id)
    {
    $orders = Order::find($id);
    return view('orders.edit',compact('orders'));
    }

    public function store(OrderRequest $request)
    {
        $order = new Order;
        $order->id_clientes = $request->id_clientes;
        $order->id_equipos = $request->id_equipos;
        $order->id_services = $request->id_services;
        $order->id_statuses = $request->id_statuses;
        $order->deadline  = $request->deadline;
        $order->save();
        return redirect()->route('orders.index');
    }

    public function update(OrderRequest $request, $id)
    {
       $order = \App\Order::find($id);
       $order->id_clientes = $request->id_clientes;
       $order->id_equipos = $request->id_equipos;
       $order->id_services = $request->id_services;
       $order->id_statuses = $request->id_statuses;
       $order->deadline = $request->deadline;
       $order->desc = $request->desc;
       $order->save();
       return redirect()->route('orders.index');
    }

    public function show($id)
    {
          $orders = \DB::table('orders')
                ->select('orders.*','equipos.desc as equipo','services.desc as servicio','services.precio','statuses.desc as estatus','clientes.name','clientes.apellido','members.desc as member')
                ->join('equipos','equipos.id','=','orders.id_equipos')
                ->join('services','services.id', '=', 'orders.id_services')
                ->join('statuses','statuses.id', '=', 'orders.id_statuses')
                ->join('clientes','clientes.id', '=', 'orders.id_clientes')
                ->join('members','members.id', '=', 'clientes.id')
                ->where('orders.id',$id)
                ->get(0);
          return view('orders.show', compact('orders'));
    }



}
