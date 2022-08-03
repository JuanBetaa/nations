<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
 //la tabla a conectar 
 protected $table ="languages";
 //la clave primaria de esa tabla
 protected $primaryKey = "language_id";
 //omitir campos de auditoria
 public $timestamps = false;
   
    public function paises(){
        //belongsTomany Method:
        //1. related model 
        //2.pivot table(intermediete table)
        //3.foreing key current model
        //4. foreing key of related model
         return $this->belongsToMany(Country::class , 'country_languages', 'language_id', 'country_id');
}
 use HasFactory;
}