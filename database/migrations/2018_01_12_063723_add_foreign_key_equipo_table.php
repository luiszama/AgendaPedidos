<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyEquipoTable extends Migration
{

    public function up()
    {
        Schema::table('orders', function (Blueprint $table)
         {
          $table->integer('id_equipos')->unsigned();
          $table->foreign('id_equipos')
                ->references('id')->on('equipos');
        });
    }


    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
         {
              $table->dropForeign('orders_id_equipos_foreign');
        });
    }
}
