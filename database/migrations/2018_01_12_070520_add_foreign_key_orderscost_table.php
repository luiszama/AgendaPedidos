<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyOrderscostTable extends Migration
{

    public function up()
    {
        Schema::table('costs', function (Blueprint $table)
        {
          $table->integer('id_orders')->unsigned();
          $table->foreign('id_orders')
                ->references('id')->on('orders');
        });
    }


    public function down()
    {
        Schema::table('costs', function (Blueprint $table)
        {
              $table->dropForeign('orders_id_costs_foreign');
        });
    }
}
