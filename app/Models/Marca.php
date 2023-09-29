<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $primaryKey = 'idmarca';


    //Relacion uno a muchos 
    public function tipovehiculo()
    {
        return $this->belongsTo('App\Models\Tipovehiculo');
    } 


        //Relacion uno a muchos 
        public function vehiculo()
        {
            return $this->hasMany('App\Models\Vehiculo');
        } 
}


