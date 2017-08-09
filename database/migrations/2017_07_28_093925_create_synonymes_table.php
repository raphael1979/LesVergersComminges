<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSynonymesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('synonymes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apple_id');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('value')->nullable(); 
=======
            $table->string('value')->nullable();
>>>>>>> c0b6756a1e903331e64bf95f8e6d39e300294c8e
=======
            $table->string('value')->nullable();
>>>>>>> origin/odile
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
     Schema::dropIfExists('synonymes');
 }
}
