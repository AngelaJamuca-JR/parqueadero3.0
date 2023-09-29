<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipousuario extends Model
{
    use HasFactory;
    protected $primaryKey = 'idtipousuario';


    //Relacion uno a muchos 
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    } 
}
