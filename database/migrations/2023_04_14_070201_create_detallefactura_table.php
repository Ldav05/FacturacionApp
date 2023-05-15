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
        Schema::create('detallefactura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idfactura')->unsigned();
            $table->integer('idproducto')->nullable()->unsigned();
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

        /*Schema::table('detallefactura', function (Blueprint $table) {
            $table->dropForeign(['idfactura']);
            $table->dropForeign(['idproducto']);
        });*/
        Schema::dropIfExists('detallefactura');
    }
};
