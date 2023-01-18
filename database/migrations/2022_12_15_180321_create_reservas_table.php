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
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements("id_reservas");
            $table->unsignedBigInteger("id_users")->nullable();
            $table->unsignedBigInteger("id_invitados")->nullable();
            $table->unsignedBigInteger("id_menus");
            $table->unsignedBigInteger("id_mesas");
            $table->unsignedBigInteger("fecha_reservas");
            $table->string('numero_tarjetas');
            $table->string('numero_personas');
            $table->timestamps();

            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_invitados')->references('id')->on('invitados')->onDelete('cascade');
            $table->foreign('id_menus')->references('id')->on('menus')->onDelete('cascade');
            $table->foreign('id_mesas')->references('id')->on('mesas')->onDelete('cascade');
            $table->foreign('fecha_reservas')->references('id')->on('horarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
