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
        Schema::create('alumnos_cursos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_alta')->nullable();
            $table->double('pagado', 6, 2)->nullable();
            $table->unsignedBigInteger('alumno_id')->unique();
            $table->unsignedBigInteger('curso_id')->unique();
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('curso_id')->references('id')->on('cursos');
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
        Schema::dropIfExists('alumnos_cursos');
    }
};
