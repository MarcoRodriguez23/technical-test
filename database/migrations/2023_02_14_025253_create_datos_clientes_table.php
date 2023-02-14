<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_clientes', function (Blueprint $table) {
            $table->integer('cliente_id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('rfc')->unique();
            $table->date('fecha_nacimiento');
            $table->integer('ingresos');
            $table->integer('egresos');
            $table->integer('no_dependientes');
            $table->string('estado_civil');
            $table->string('genero');
            $table->string('ultimo_grado_estudios');
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
        Schema::dropIfExists('datos_clientes');
    }
}
