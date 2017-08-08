<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->unique();
            $table->integer('id_couleur_epiderme_value')->nullable();
            $table->integer('id_couleur_uniforme_value')->nullable();
            $table->integer('id_strie_value')->nullable();
            $table->integer('id_coloration_value')->nullable();
            $table->integer('id_lenticelle_value')->nullable();
            $table->integer('id_liege_value')->nullable();
            $table->integer('id_forme_value')->nullable();
            $table->integer('id_calibre_value')->nullable();
            $table->integer('id_pedoncule_value')->nullable();
            $table->integer('id_cavite_pedonculaire_larg_value')->nullable();
            $table->integer('id_cavite_pedonculaire_prof_value')->nullable();
            $table->integer('id_cuvette_oeil_value')->nullable();
            $table->integer('id_cuvette_oeil_prof_value')->nullable();
            $table->string('id_signe_particulier_value')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apples');
    }
}
