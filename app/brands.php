<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brands extends Model
{
    protected $table = "brands";
    protected $primaryKey = 'id';
    
    protected $fillable = ['brands_name', 'item_stocks'];
}
