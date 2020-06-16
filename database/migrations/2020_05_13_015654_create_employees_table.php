<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('code_employees');
            $table->string('cin');
            $table->string('code_de_loyer');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->date('ddn');
            $table->string('ldn');
            $table->string('ville');
            $table->string('adresse');
            $table->string('matieres_enseigner');
            $table->string('niveaux_enseigner');
            $table->date('date_embauche');
            $table->string('n_cnss');
            $table->string('n_rib');
            $table->string('salaire_base');
            $table->string('type_de_salaire');
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
        Schema::dropIfExists('employees');
    }
}
