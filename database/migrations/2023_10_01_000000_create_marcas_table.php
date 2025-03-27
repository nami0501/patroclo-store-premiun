<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarcasTable extends Migration
{
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id('id_marca');
            $table->string('nombre');
            $table->string('codigo_pais')->nullable();
            $table->string('logo_url')->nullable();
            $table->char('estado_auditoria', 1);
            $table->timestamp('fecha_creacion_auditoria')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    public function down()
    {
        Schema::dropIfExists('marcas');
    }
}
