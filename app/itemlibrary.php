<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemlibrary extends Model
{
    protected $table ="itemlibrary";
    protected $primaryKey = 'id';
   
    protected $fillable = ['name','category','pricing','instock','gambar'];

    public function categories()
    {
        return $this->hasMany('App/categories', 'id', 'category');
    }

    public function outlet()
    {
        return $this->hasMany('App/outlet', 'id', 'outlet');
    }

    
 
}
