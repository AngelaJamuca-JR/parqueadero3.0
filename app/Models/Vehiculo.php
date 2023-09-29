<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;
    protected $primaryKey ='idvehiculo';


        //Funcion de Relacion uno a uno (viceversa)
    public function factura()
    {
        //Llamamos el modelo (En cadena) 
        //Llama a la llave foranea 
        return $this->hasOne('App\Models\Factura');
    }   


         
     //Relacion uno a muchos(inversa)
     public function estado()
     {
         return $this->hasMany('App\Models\Estado',);
     }

    //Relacion uno a muchos 
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    } 


    //Relacion uno a muchos 
    public function marca()
    {
        return $this->belongsTo('App\Models\Marca');
    } 
}
