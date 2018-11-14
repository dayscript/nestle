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
            $table->string('ciudad')->nullable();
            $table->string('fecha_visita')->nullable();
            $table->string('punto_venta')->nullable();
            $table->string('nombre_tendero')->nullable();
            $table->string('nombre_visitador')->nullable();
            $table->string('barrio')->nullable();
            $table->string('direccion')->nullable();
            $table->string('celular')->nullable();
            $table->string('numero_visita')->nullable();
            $table->string('nit')->nullable();
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
            $table->string('caras_ex_nescafe')->nullable();
            $table->string('caras_ex_maggi')->nullable();
            $table->string('caras_ad_nescafe')->nullable();
            $table->string('caras_ad_maggi')->nullable();
            $table->string('stickers')->nullable();
            $table->string('images')->nullable();
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
