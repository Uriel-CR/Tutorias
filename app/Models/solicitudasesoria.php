<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitudasesoria extends Model
{
    use HasFactory;
    protected $table = 'solicitud_asesoria';
    protected $primaryKey = 'id_solicitud';

    public $timestamps = true;
    protected $fillable = [
        'id_profesor_login',
        'id_materia',
        'id_alumno_tutoria',
        'fecha',
        'medio_didactico_recurso',
        'temas_tratar_descripcion'


    ];
}
