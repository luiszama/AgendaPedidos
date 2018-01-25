<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyMembersTable extends Migration
{

    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
          $table->integer('id_members')->unsigned();
          $table->foreign('id_members')
                ->references('id')->on('members');
        });
    }


    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('orders_id_members_foreign');
        });
    }
}
