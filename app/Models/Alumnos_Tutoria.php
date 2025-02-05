<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos_Tutoria extends Model
{
    use HasFactory;

    protected $table = 'alumnos_tutorias';

    protected $primaryKey = 'id_alumno_tutoria';
    
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
