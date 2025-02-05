<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorLogin extends Model
{
    use HasFactory;
    protected $table = 'profesores_login';
    protected $primaryKey = 'id_profesor_login';
    public $timestamps = false;

    protected $fillable = ['id_grupo', 'id_carrera', 'nombre', 'ap_paterno', 'ap_materno', 'correo', 'contraseña'];

    public function mensualAsesorias()
    {
        return $this->hasMany(Mensual_Asesoria::class, 'id_profesor_login');
    }
}
