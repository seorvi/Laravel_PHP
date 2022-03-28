<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->string("passaport_client", 9)->primary();
            $table->string("nom_client");
            $table->integer("edat_client");
            $table->integer("telefon_client");
            $table->string("adreca_client");
            $table->string("ciutat_client");
            $table->string("pais_client");
            $table->string("email_client");
            $table->enum("tipus_targeta", ["debit", "credit"]);
            $table->integer("numero_targeta");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
