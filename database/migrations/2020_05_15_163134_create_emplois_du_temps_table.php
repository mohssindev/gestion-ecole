<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploisDuTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emplois_du_temps', function (Blueprint $table) {
            $table->id();
            $table->string('annee');
            $table->string('class');
            $table->string('jour');
            $table->string('heurs');
            $table->string('matiere');
            $table->string('employee');
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
        Schema::dropIfExists('emplois_du_temps');
    }
}
