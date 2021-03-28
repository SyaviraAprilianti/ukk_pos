<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table ="suppliers";
    protected $primaryKey = 'id';
   
    protected $fillable = ['name','address','phone','email'];
}
