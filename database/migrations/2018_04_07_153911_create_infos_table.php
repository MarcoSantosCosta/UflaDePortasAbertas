<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {

            $table->increments('id');

            $table->string('grau' , 155);
            $table->string('titulo', 155);
            $table->string('modalidade', 155);
            $table->string('regime', 155);
            $table->string('turno', 155);
            $table->integer('duracao');
            $table->integer('vagas');
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
        Schema::dropIfExists('infos');
    }
}
