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
        Schema::create('bienes_nacionales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('color');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serial');
            $table->integer('numero_oficina');
            $table->integer('numero_bien');
            $table->string('codigo');
            $table->integer('id_coordinaciones');
            $table->foreign('id_coordinaciones')->references('id')->on('coordinaciones')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bienes_nacionales');
    }
};
