<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');
            $table->integer('idusuario')->unsigned();
            $table->integer('idcliente')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        /* Schema::table('factura', function (Blueprint $table) {
            $table->dropForeign(['idusuario']);
            $table->dropForeign(['idclinte']);
        });*/
        Schema::dropIfExists('factura');
    }
};
