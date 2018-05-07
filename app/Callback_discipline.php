<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callback_discipline extends Model
{
    protected $table='callback_discipline';
    protected $primaryKey='id';
    public $incrementing='id';
    protected $fillable = ['callback_id', 'discipline_id'];
}
