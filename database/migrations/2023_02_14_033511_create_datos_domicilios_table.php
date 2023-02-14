<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_domicilios', function (Blueprint $table) {
            $table->string('calle');
            $table->integer('no_exterior');
            $table->integer('no_interior');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('estado');
            $table->integer('cp');

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
        Schema::dropIfExists('datos_domicilios');
    }
}
