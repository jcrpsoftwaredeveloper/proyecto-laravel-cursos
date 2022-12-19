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
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',20);
            $table->string('apellido1',20);
            $table->string('apellido2',20)->nullable();
            $table->text('observaciones')->nullable();
            $table->string('direccion',200)->nullable();
            $table->string('telefono', 15)->nullable();
            $table->unsignedBigInteger('user_id')->unique(); //ESTE CAMPO ES ÚNICO TODO
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
};
