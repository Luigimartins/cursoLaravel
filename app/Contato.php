<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
    	return (object) [
    		'nome'=>'luigi',
    		'tel'=>'988688868'
    	];
    }
}
