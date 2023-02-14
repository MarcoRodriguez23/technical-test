<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosOfertasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('datos_ofertas', function (Blueprint $table) {
      $table->integer('monto');
      $table->string('plazo');
      $table->float('pago_mensual');
      $table->string('tasa_interes');
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
      Schema::dropIfExists('datos_ofertas');
  }
}
