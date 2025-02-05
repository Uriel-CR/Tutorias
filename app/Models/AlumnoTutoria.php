<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoTutoria extends Model
{
    use HasFactory;
    protected $table = 'alumnos_tutorias';
    protected $primaryKey = 'id_alumno_tutoria';
    public $timestamps = false;

    protected $fillable = ['id_periodo', 'id_semestre', 'id_grupo', 'id_carrera', 'matricula', 'nombre', 'ap_paterno', 'ap_materno', 'correo', 'contraseña'];

    public function mensulAsesorias()
    {
        return $this->hasMany(Mensual_Asesoria::class, 'id_alumno_tutoria');
    }
    public function grupo(){
        return $this->belongsTo(Grupos::class, 'id_grupo');
    }

    public function periodo(){
        return $this->belongsTo(Periodo::class, 'id_periodo');
    }

    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->ap_paterno} {$this->ap_materno}";
    }
}
