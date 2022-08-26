<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Medicamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('medicamentos', function (Blueprint $table) {
                $table->engine="InnoDB";

                $table->bigIncrements('id');
                $table->string('nombre')->nullable();
                $table->integer('cantidad')->nullable();
                $table->integer('precio')->nullable();
                $table->date('fechaCaducidad')->nullable();
                $table->integer('disponible')->nullable();
                $table->bigInteger('laboratorio_id')->nullable()->unsigned();
                $table->bigInteger('sitio_id')->nullable()->unsigned();
                $table->bigInteger('presentacion_id')->nullable()->unsigned();
                $table->timestamps();

                $table->foreign('laboratorio_id')->references('id')->on('laboratorios')->onDelete('cascade');
                $table->foreign('sitio_id')->references('id')->on('sitios')->onDelete('cascade');
                $table->foreign('presentacion_id')->references('id')->on('presentaciones')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
