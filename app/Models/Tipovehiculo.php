<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipovehiculo extends Model
{
    use HasFactory;
    protected $primaryKey = 'idtipovehiculo';

    //Relacion uno a muchos 
    public function marca()
    {
         return $this->hasMany('App\Models\Marca');
    } 
}
