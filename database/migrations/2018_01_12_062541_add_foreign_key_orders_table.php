<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table)
        {
          $table->integer('id_clientes')->unsigned();
          $table->foreign('id_clientes')
                ->references('id')->on('clientes');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
        {
          $table->dropForeign('orders_id_clientes_foreign');
        });
    }
}
