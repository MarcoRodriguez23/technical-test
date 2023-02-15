<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDecisionFinalColumnToDatosOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('datos_ofertas', function (Blueprint $table) {
          $table->string('decision_final')->default('sin cambios');
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
          $table->dropColumn('decision_final');
        });
    }
}
