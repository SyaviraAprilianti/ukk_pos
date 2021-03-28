<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    protected $table ="outlet";
    protected $primaryKey = 'id';
    protected $fillable = ['name','address','phone','id_provinces','id_regencies','id_districts','id_villages','latitude','longitude'];
}
