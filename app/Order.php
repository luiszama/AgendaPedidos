<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  protected $fillable = [
      'deadline',
      'desc',
      'repair',
      'id_clientes',
      'id_equipos',
      'id_services',
      'id_statuses',
  ];

}
