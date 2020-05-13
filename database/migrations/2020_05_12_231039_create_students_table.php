<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('cin');
            $table->string('cne');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->date('ddn');
            $table->string('ldn');
            $table->string('ville');
            $table->string('adresse');
            $table->string('cin_tuteur');
            $table->string('nom_tuteur');
            $table->string('adresse_tuteur');
            $table->string('tel1');
            $table->string('tel2')->nullable();
            $table->string('email')->nullable();
            $table->string('niveau');
            $table->string('class');
            $table->string('date_entree');
            $table->boolean('etat')->default(1);
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
        Schema::dropIfExists('students');
    }
}
