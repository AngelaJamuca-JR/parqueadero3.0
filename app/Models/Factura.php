<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;
    protected $primaryKey ='idfactura';



     
     //Funcion de Relacion uno a uno  entre Factura y Vehiculo
    public function vehiculo()
    {

        //Llamamos el modelo (En cadena)
        //Llama a la llave foranea 
        return $this->belongsTo('App\Models\Vehiculo'); 
    }    
}
