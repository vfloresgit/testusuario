<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rol extends Model
{
    //
  

  public $table='roles';
  protected $primaryKey='id';
  protected $fillable = ['nombre','descripcion','created_at','updated_at','deleted_at'];
}
