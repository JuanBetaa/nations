<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //la tabla a conectar 
    protected $table ="countries";
    //la clave primaria de esa tabla
    protected $primaryKey = "country_id";
    //omitir campos de auditoria
    public $timestamps = false;
    use HasFactory;
   
    //Many to many country - language
    //relationship
    public function languages(){
        //belongsTomany Method:
        //1. related model 
        //2.pivot table(intermediete table)
        //3.foreing key current model
        //4. foreing key of related model
         return $this->belongsToMany(Language::class , 'country_languages', 'country_id', 'language_id');
    }
    //
    public function regions(){
        //belongs to method : parameter

        return $this->belongsTo(Region::class, 'region_id');

    }
}


