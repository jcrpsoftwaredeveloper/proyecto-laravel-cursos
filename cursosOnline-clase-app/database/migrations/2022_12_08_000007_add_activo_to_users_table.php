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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('activo')->default(true)->after('password');
            $table->boolean('bloqueado')->default(true)->after('activo');
            $table->integer('num_intentos')->default(0)->after('bloqueado');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('activo');
            $table->dropColumn('bloqueado');
            $table->dropColumn('num_intentos');
        });
    }
};
