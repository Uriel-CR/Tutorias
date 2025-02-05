<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profsores_Login extends Model
{
    use HasFactory;

    protected $table = 'profesores_login';

    protected $primaryKey = 'id_profesor_login';
    
    public function getNombreCompletoAttribute()
    {
        return "{$this->nombre} {$this->ap_paterno} {$this->ap_materno}";
    }
    
    public function carrera(){
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }
    
    public function grupo(){
        return $this->hasMany(Grupos1::class, 'id_profesor_login');
    }
    
}
