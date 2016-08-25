<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PublicacionesSitio extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones_sitio', function (Blueprint $table) {
            $table->integer('publicaciones_id')->unsigned();
            $table->integer('sitio_id')->unsigned();
            $table->integer('estado_id')->default(4);

            $table->foreign('publicaciones_id')->references('id')->on('publicaciones')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('sitio_id')->references('id')->on('sitios')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['publicaciones_id', 'sitio_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('publicaciones_sitio');
    }
}
