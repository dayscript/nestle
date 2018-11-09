<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nit')->nullable();
            $table->string('nombre_cliente')->nullable();
            $table->string('razon_social')->nullable();
            $table->string('n_visita')->nullable();
            $table->string('ventas')->nullable();
            $table->boolean('inflatablesNescafe1')->nullable();
            $table->boolean('inflatablesNescafe2')->nullable();
            $table->boolean('inflatablesNescafe3')->nullable();
            $table->boolean('inflatablesNescafe4')->nullable();
            $table->boolean('inflatablesNescafe5')->nullable();
            $table->boolean('inflatablesMaggi1')->nullable();
            $table->boolean('inflatablesMaggi2')->nullable();
            $table->boolean('inflatablesMaggi3')->nullable();
            $table->boolean('inflatablesMaggi4')->nullable();
            $table->boolean('inflatablesMaggi5')->nullable();
            $table->boolean('inflatablesMaggi6')->nullable();
            $table->boolean('inflatablesMaggi7')->nullable();
            $table->string('imgNescafe1')->nullable();
            $table->string('imgNescafe2')->nullable();
            $table->string('imgNescafe3')->nullable();
            $table->string('imgNescafe4')->nullable();
            $table->string('imgNescafe5')->nullable();
            $table->string('imgMaggi1')->nullable();
            $table->string('imgMaggi2')->nullable();
            $table->string('imgMaggi3')->nullable();
            $table->string('imgMaggi4')->nullable();
            $table->string('imgMaggi5')->nullable();
            $table->string('imgMaggi6')->nullable();
            $table->string('imgMaggi7')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('visitas');
    }
}
