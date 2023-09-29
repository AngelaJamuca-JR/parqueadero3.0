<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $primaryKey = 'idusuario';

    //Relacion uno a muchos(inversa)
    public function tipoUsuario()
    {
        return $this->hasMany('App\Models\Tipousuario',);
    }

    //Relacion uno a muchos 
    public function vehiculo()
    {
        return $this->hasMany('App\Models\Vehiculo');
    } 
}
