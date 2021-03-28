<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gratuity extends Model
{
    protected $table ="gratuity";
    protected $primaryKey = 'id';
    
    protected $fillable = ['name','amount',];
    
}
