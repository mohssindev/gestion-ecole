<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absent', function (Blueprint $table) {
            $table->id();
            $table->string('id_students');
            $table->string('annee_abs');
            $table->string('matiere_abs');
            $table->date('date_debut_abs');
            $table->date('date_fin_abs');
            $table->string('nbr_heure_abs');
            $table->string('user_add');
            $table->string('user_update');
            $table->string('user_delete');
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
        Schema::dropIfExists('absent');
    }
}
