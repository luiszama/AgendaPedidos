<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
  protected $fillable = [
      'name','apellido','vigencia','id_members',
  ];
}
