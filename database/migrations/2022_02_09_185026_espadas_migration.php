<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EspadasMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Espadas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('color');
            $table->dateTime('creacion');
            $table->string('descripcion');
            $table->string('herrero');
            $table->integer('longitud');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Espadas');
    }
}
