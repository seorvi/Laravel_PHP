<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->string("codi_unic_vol", 6)->primary();
            $table->string("model_avio");
            $table->string("ciutat_origen");
            $table->string("ciutat_desti");
            $table->string("terminal_origen");
            $table->string("terminal_desti");
            $table->date("data_sortida");
            $table->date("data_arribada");
            $table->time("hora_sortida");
            $table->time("hora_arribada");
            $table->enum("Classe", ["Turista", "Business", "Primera"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
