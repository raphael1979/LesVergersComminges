<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCavitePedonculaireProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cavite_pedonculaire_prof', function (Blueprint $table) {
            $table->increments('id_cavite_pedonculaire_prof');
            $table->string('value');
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
        //
        Schema::dropIfExists('cavite_pedonculaire_prof');
    }
}
