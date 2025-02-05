<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos1 extends Model
{
    use HasFactory;

    protected $table = 'grupos';

    protected $primaryKey = 'id_grupo';

    protected $fillable = [
        'nombre_grupo'
    ];

    public function alumno(){
        return $this->hasMany(Alumnos_Tutoria::class, 'id_grupo');
    }

    public function profesor_login(){
        return $this->belongsTo(Profsores_Login::class, 'id_profesor_login');
    }
}
