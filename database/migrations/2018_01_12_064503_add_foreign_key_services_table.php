<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyServicesTable extends Migration
{

    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
          $table->integer('id_services')->unsigned();
          $table->foreign('id_services')
                ->references('id')->on('services');
        });
    }


    public function down()
    {
        Schema::table('orders', function (Blueprint $table)
        {
            $table->dropForeign('orders_id_services_foreign');
        });
    }
}
