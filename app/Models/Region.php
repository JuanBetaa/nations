<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
//la tabla a conectar 
protected $table ="regions";
//la clave primaria de esa tabla
protected $primaryKey = "region_id";
//omitir campos de auditoria
public $timestamps = false;
    use HasFactory;

    public function countries(){
        return $this->hasMany(Country::class, 'region_id');
    }

}
