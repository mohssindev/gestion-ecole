<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExsamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exsams', function (Blueprint $table) {
            $table->id();
            $table->string('annee');
            $table->string('students_id');
            $table->string('matiere_id');
            $table->float('note_exsam');
            $table->integer('cofe');
            $table->date('date_exsam');
            $table->text('remarque');
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
        Schema::dropIfExists('exsams');
    }
}
