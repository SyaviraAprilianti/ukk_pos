<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categori extends Model
{
    protected $table ="categories";
    protected $primaryKey = 'id';
   
    protected $fillable = ['name'];
}
