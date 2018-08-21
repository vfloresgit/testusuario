<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Persona extends Model
{
    //

    public $table='personas';
    protected $primaryKey='id';
    protected $fillable = ['nombre','apellidopaterno','apellidomaterno','email','dni','distrito','direccion','telefonomovil','telefonofijo','fechanacimiento','created_at','updated_at','empresa_id'];
    //public $timestamps= false;
}
