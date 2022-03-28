<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->string("passaport_client_reserva", 9);
            $table->string("codi_unic_vol_reserva", 6);
            $table->foreign("codi_unic_vol_reserva")->references("codi_unic_vol")->on("vols");
            $table->string("localitzador");
            $table->string("numero_seient");
            $table->enum("equipatge_ma", ["si", "no"]);
            $table->enum("equipatge_cabina", ["si", "no"]);
            $table->integer("quantitat_equipatges_20");
            $table->enum("tipus_asseguranca", ["fins_1000_euros", "fins_500_euros", "sense_franquicia"]);
            $table->float("preu_vol");
            $table->enum("tipus_checking", ["online", "mostrador", "quiosc"]);
            $table->primary(["passaport_client_reserva", "codi_unic_vol_reserva"]);
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
}
