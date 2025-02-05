<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MensTutoria extends Model
{
    use HasFactory;

    protected $table = 'mens_tutoria';

    protected $primaryKey = 'id_mens_tutoria';

    protected $fillable = [
        'id_profesor_login',
        'id_alumno_tutoria',
        'id_problematica',
        'mes_entrega',
        'analisis_metodo_aplicado',
        'area_canalizar'
    ];
}
