<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    use HasFactory;

    
    protected $table = 'profesores_login';
    protected $primaryKey = 'id_profesor_login';

    // Campos que se pueden llenar automáticamente en la inserción
    protected $fillable = [
        'nombre',
        'ap_paterno',
        'ap_materno', // Relacionado con carreras
        // Otros campos de la tabla alumnos
    ];
    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->ap_paterno} {$this->ap_materno}";
    }
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }
}
