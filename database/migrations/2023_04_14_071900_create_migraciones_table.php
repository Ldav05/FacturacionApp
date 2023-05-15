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
        Schema::table('detallefactura', function (Blueprint $table) {
            // $table->integer('idfactura');
            $table->foreign('idfactura')->references('id')->on('factura');
            //$table->integer('idproducto')->nullable();
            $table->foreign('idproducto')->references('id')->on('producto');
        });

        Schema::table('factura', function (Blueprint $table) {
            // $table->integer('idusuario');
            $table->foreign('idusuario')->references('id')->on('users');
            //$table->integer('idcliente')->nullable();
            $table->foreign('idcliente')->references('id')->on('cliente');
        });

        Schema::table('users', function (Blueprint $table) {
            //$table->integer('rolid');
            $table->foreign('rolid')->references('id')->on('rol');
        });


        Schema::table('_permiso_denegado', function (Blueprint $table) {
            // $table->integer('permiso_id');
            $table->foreign('permiso_id')->references('id')->on('_permiso');
            //$table->integer('rol_id')->nullable();
            $table->foreign('rol_id')->references('id')->on('rol');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detallefactura', function (Blueprint $table) {
            $table->dropForeign(['idfactura']);
            $table->dropForeign(['idproducto']);
        });

        Schema::table('factura', function (Blueprint $table) {
            $table->dropForeign(['idusuario']);
            $table->dropForeign(['idcliente']);
        });


        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rolid']);
        });

        Schema::table('_permiso_denegado', function (Blueprint $table) {
            $table->dropForeign(['permiso_id']);
            $table->dropForeign(['rol_id']);
        });
    }
};
