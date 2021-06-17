<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vivienda extends Model
{

    protected $table = 'tb_vivienda';
    //agregar
    protected $fillable = ['c_habit', 'c_baños', 'colonia','precio','tamanio','municipio','departamento','categoria','negociable','estado','created_at'];
   protected $primaryKey = 'id';
   
}
