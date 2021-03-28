<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
    protected $table ="discount";
    protected $primaryKey = 'id';
   
    protected $fillable = ['name','amount'];
}
