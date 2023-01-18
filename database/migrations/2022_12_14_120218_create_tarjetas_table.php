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
        Schema::defaultStringLength(100);

        Schema::create('tarjetas', function (Blueprint $table) {
            $table->string("numero_tarjeta")->primary();
            $table->string("fecha_vencimiento");
            $table->string("cvv");
            $table->unsignedBigInteger("id_users");
            $table->timestamps();

            $table->foreign("id_users")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjetas');
    }
};
