<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flota_vehicular', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('id_estado');
            $table->foreign('id_estado')->references('id')->on('estado');
            $table->string('tipo_vehiculo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->integer('año');
            $table->string('placa');
            $table->string('serial_motor');
            $table->string('serial_carroceria');
            $table->string('caucho');
            $table->string('rin');
            $table->string('numero_oficina');
            $table->string('estado_de_uso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flota_vehicular');
    }
};
