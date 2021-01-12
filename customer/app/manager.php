<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table='user';
    protected $primarykey='id';
    public $timestamps= false;
}
