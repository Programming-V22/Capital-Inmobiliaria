<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('precio');
            $table->string('direccion');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('inodoros');
            $table->integer('autos');
            $table->integer('cuartos');
            $table->string('portada');
            $table->unsignedBigInteger('id_tipo');
            $table->foreign("id_tipo")
                ->references("id")
                ->on("tipos")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
        Schema::dropIfExists('inmuebles');
    }
}
