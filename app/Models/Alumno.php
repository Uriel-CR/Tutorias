<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumnos_tutorias';
    protected $primaryKey = 'id_alumno_tutoria';

    // Campos que se pueden llenar automáticamente en la inserción
    protected $fillable = [
        'id_periodo',
        'id_semestre',
        'id_grupo',
        'id_carrera',
        'matricula', 
        'nombre',
        'ap_paterno',
        'ap_materno', // Relacionado con carreras
        'correo', // Relacionado con periodos
    ];
    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->ap_paterno} {$this->ap_materno}";
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }
    public function semestre()
    {
        return $this->belongsTo(Semestre::class, 'id_semestre');
    }

}
