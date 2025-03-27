<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductoImagen extends Model
{
    protected $table = 'producto_imagenes';
    protected $primaryKey = 'id_producto_imagen';
    public $timestamps = false;

    protected $fillable = [
        'id_producto',
        'imagen_url',
        'estado_auditoria',
        'fecha_creacion_auditoria'
    ];

    public function producto(): BelongsTo
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
