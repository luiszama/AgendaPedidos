<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyStatusesTable extends Migration
{

    public function up()
    {
        Schema::table('orders', function (Blueprint $table)
        {
          $table->integer('id_statuses')->unsigned()->nullable(1);
          $table->foreign('id_statuses')
                ->references('id')->on('statuses');
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
