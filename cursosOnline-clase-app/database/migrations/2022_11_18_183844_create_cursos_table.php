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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('ref',15); //ESTE CAMPO ES UNIQUE TODO
            $table->string('titulo',100);
            $table->text('descripcion');
            $table->decimal('precio', $precision = 6, $scale = 2)->nullable();
            $table->double('duracion', 6, 2)->nullable();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_final')->nullable();
            $table->string('horario',45)->nullable();
            $table->string('imagen',100)->nullable();
            $table->boolean('activo')->default(true);
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
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
        Schema::dropIfExists('cursos');
    }
};
