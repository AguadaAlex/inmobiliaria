<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->Increments('id');
            $table->UnsignedInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->UnsignedInteger('localidad_id');
            $table->foreign('localidad_id')->references('id')->on('localidads');
            $table->string('calle');
            $table->string('numero');
            $table->string('piso');
            $table->string('dpto');
            $table->string('estado');
            $table->string('zona');
            $table->integer('cantambientes');
            $table->integer('cantbanos');
            $table->string('foto');
            $table->string('observaciones');
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
        Schema::dropIfExists('propiedads');
    }
}
