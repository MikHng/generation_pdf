<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Informationrapport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informationrapports', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->nullable();;
            $table->string('nomstructure')->nullable();
            $table->string('annee')->nullable();
            $table->string('nomdfc')->nullable();
            $table->string('nomdir')->nullable();
            $table->string('chemin')->nullable();
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
    }
}
