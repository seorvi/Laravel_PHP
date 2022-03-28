<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuaris', function (Blueprint $table) {
            $table->string("nom_cognoms");
            $table->string("email_usuari")->primary();
            $table->string("contrasenya_usuari");
            $table->enum("tipus", ["treballador", "cap_departament"]);
            $table->time("darrere_hora_entrada");
            $table->time("darrere_hora_sortida");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuaris');
    }
}
