<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salestype extends Model
{
    protected $table = "salestype";
    protected $primaryKey = 'id';

    protected $fillable = ['salestype_name',];
}
