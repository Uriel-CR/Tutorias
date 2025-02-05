<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    protected $table = 'periodos';

    protected $primaryKey = 'id_periodo';

    public function alumnos_tutorias(){
        return $this->hasMany(Alumnos_Tutoria::class, 'id_periodo');
    }
}
