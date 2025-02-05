<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = 'materias';
    protected $primaryKey = 'id_materia';
    public $timestamps = false;

    protected $fillable = ['clave_materia', 'nombre', 'HRS_TEORICAS', 'HRS_PRACTICAS', 'creditos'];

    public function mensualAsesorias()
    {
        return $this->hasMany(Mensual_Asesoria::class, 'id_materia');
    }
}
