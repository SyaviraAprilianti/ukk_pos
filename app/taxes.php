<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taxes extends Model
{
    protected $table ="taxes";
    protected $primaryKey = 'id';
   
    protected $fillable = ['name','amount'];
}
