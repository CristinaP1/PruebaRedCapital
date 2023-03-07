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
        Schema::create('cotizacion_ds', function (Blueprint $table) {
            $table->id();
            $table->integer("cantidad");
            $table->double("precio_unitario");
            $table->timestamp("fecha_registro");
            $table->timestamps();

            $table->unsignedBigInteger('cotizacion_id');
            $table->foreign('cotizacion_id')->references('id')->on('cotizacion_cs')->ondelete('cascade');

            $table->string('producto_sku')->nullable();
            $table->foreign('producto_sku')->references('sku')->on('productos')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cotizacion_ds');
    }
};
