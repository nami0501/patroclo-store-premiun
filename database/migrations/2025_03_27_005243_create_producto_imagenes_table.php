<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->id('id_producto_imagen');
            $table->foreignId('id_producto')->constrained('productos')->onDelete('cascade');
            $table->string('imagen_url');
            $table->string('estado_auditoria')->default('activo');
            $table->timestamp('fecha_creacion_auditoria')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto_imagenes');
    }
};
