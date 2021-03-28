<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modifiers extends Model
{
    protected $table ="modifiers";
    protected $primaryKey = 'id';
    protected $fillable = ['name','price','categori'];
 
}
