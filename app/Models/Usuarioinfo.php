<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarioinfo extends Model
{
	protected $table 		= 'usuario_info'	;
	protected  $guarded = ['id'];

	// public function userlogin(){
    //     return $this->belongTo('App\Models\User' );
    // }
}