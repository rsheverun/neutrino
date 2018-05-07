<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
	protected $table='disciplines';
    protected $primaryKey='id';
    public $incrementing='id';
    public function callbacks(){
    	return $this->belongsToMany('App\Callback');
    }
}
