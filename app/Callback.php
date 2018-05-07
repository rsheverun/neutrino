<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback extends Model
{
   	protected $table='callbacks';
    protected $primaryKey='id';
    public $incrementing='id';
    
    public function disciplines(){
    	return $this->belongsToMany('App\Discipline');
    }
}
