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
            $table->increments('id_synonyme');
            $table->integer('id_apple');
            $table->string('synomyme')->nullable();
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
