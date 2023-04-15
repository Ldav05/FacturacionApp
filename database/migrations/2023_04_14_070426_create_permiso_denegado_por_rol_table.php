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
        Schema::create('_permiso_denegado', function (Blueprint $table) {
            $table->integer('permiso_id')->unsigned();
            $table->integer('rol_id')->nullable()->unsigned();
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

        /* Schema::table('_permiso_denegado_por_rol', function (Blueprint $table) {
            $table->dropForeign(['permiso_id']);
            $table->dropForeign(['rol_id']);
        });*/
        Schema::dropIfExists('_permiso_denegado');
    }
};
