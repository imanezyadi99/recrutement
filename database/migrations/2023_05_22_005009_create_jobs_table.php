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
        Schema::create('jobs', function (Blueprint $table) {
             $table->id();
             $table->string('logo_entreprise');
             $table->string('poste');
             $table->string('nom_societe');
             $table->string('ville_societe');
              $table->text('description');
              $table->text('responsabilite');
              $table->text('exigence');
             $table->decimal('salaire', 8, 2);
              $table->string('nom');
              $table->string('prenom');
               $table->string('email');
              $table->string('password');
               $table->boolean('valide')->default(false);
               $table->boolean('is_running')->default(false);

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
        Schema::dropIfExists('jobs');
    }
};
