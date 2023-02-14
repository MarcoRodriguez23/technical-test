<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('users', function (Blueprint $table) {
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
        $table->dropColumn('cliente_id');
        $table->dropColumn('nombre');
        $table->dropColumn('apellido_paterno');
        $table->dropColumn('apellido_materno');
        $table->dropColumn('rfc');
        $table->dropColumn('fecha_nacimiento');
        $table->dropColumn('ingresos');
        $table->dropColumn('egresos');
        $table->dropColumn('no_dependientes');
        $table->dropColumn('estado_civil');
        $table->dropColumn('genero');
        $table->dropColumn('ultimo_grado_estudios');
      });
    }
}
