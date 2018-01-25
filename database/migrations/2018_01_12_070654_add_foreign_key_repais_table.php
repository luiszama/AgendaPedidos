<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyRepaisTable extends Migration
{

    public function up()
    {
        Schema::table('costs', function (Blueprint $table)
        {
          $table->integer('id_repais')->unsigned();
          $table->foreign('id_repais')
                ->references('id')->on('repais');
        });
    }

    public function down()
    {
        Schema::table('costs', function (Blueprint $table)
        {
            $table->dropForeign('orders_id_repais_foreign');
        });
    }
}
