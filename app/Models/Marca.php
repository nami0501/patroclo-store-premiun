<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    protected $table = 'marcas';

    protected $fillable = [
        'nombre',
        'codigo_pais',
        'logo_url',
        'estado_auditoria',
        'fecha_creacion_auditoria',
    ];
}
