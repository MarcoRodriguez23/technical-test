<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToDatosOfertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('datos_ofertas', function (Blueprint $table) {
        $table->integer('cliente_id');
        $table->foreign('cliente_id')->references('cliente_id')->on('datos_clientes');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('datos_ofertas', function (Blueprint $table) {
        $table->dropForeign(['cliente_id']);
        $table->dropColumn('cliente_id');
      });
    }
}
