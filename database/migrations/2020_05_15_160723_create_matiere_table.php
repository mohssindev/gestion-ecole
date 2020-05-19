<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere', function (Blueprint $table) {
            $table->id();
            $table->string('code_matiere');
            $table->string('matiere');
            $table->string('employer')->nullable();
            $table->integer('cofe')->nullable();
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
        Schema::dropIfExists('matiere');
    }
}
