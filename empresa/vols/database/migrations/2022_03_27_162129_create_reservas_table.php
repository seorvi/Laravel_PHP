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
            $table->string("passaport_client", 9);
            $table->string("codi_unic_vol", 6);
            $table->foreign("codi_unic_vol")->references("codi_unic_vol")->on("vols")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("passaport_client")->references("passaport_client")->on("clients")->onDelete("cascade")->onUpdate("cascade");
            $table->string("localitzador");
            $table->string("numero_seient");
            $table->enum("equipatge_ma", ["si", "no"]);
            $table->enum("equipatge_cabina", ["si", "no"]);
            $table->integer("quantitat_equipatges_20");
            $table->enum("tipus_asseguranca", ["fins_1000_euros", "fins_500_euros", "sense_franquicia"]);
            $table->float("preu_vol");
            $table->enum("tipus_checking", ["online", "mostrador", "quiosc"]);
            $table->primary(["passaport_client", "codi_unic_vol"]);
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
