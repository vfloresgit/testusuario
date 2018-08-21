<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //

    public $table='users';
    protected $primaryKey='id';
    protected $fillable = ['dni','password','rol_id','created_at','updated_at','persona_id','remember_token'];
    //public $timestamps= false;{}
}
