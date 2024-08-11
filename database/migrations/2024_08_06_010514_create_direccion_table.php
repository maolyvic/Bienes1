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
        Schema::create('direccion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_sede');
            $table->foreign('id_sede')->references('id')->on('sede');
            $table->integer('id_coordinacion');
            $table->foreign('id_coordinacion')->references('id')->on('coordinacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion');
    }
};
