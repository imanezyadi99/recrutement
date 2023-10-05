<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Espace_candidats', function (Blueprint $table) {
            $table->id();
            $table->integer('donnees_personnels_id');
            $table->string('metier');
            $table->string('date_posted');
            $table->string('niveau_etude');
            $table->string('année_experience');
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
        Schema::dropIfExists('Espace_candidats');
    }
};
