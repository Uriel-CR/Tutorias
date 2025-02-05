<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensual_Asesoria extends Model
{
    use HasFactory;
    protected $table = 'mensual_asesoria';
    protected $primaryKey = 'id_asesoria_mensual';
    public $timestamps = false; // Si no estás usando timestamps en esta tabla

    protected $fillable = [
        'id_profesor_login',
        'id_alumno_tutoria',
        'id_materia',
        'mes',
        'no_asesorias_implicadas',
        'tipo_recurso_didactico',
    ];
}
