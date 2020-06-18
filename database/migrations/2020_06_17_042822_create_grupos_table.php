<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id('grupo_id');
            $table->bigInteger('materia_id')->unsigned();
            $table->bigInteger('profesor_id')->unsigned();
            $table->char('salon',5);
            $table->char('clave',4);
            $table->timestamps();
        });

        Schema::table('grupos', function (Blueprint $table) {
            $table->foreign('materia_id')->references('id')->on('materias');
            $table->foreign('profesor_id')->references('id')->on('profesors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
