<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detailorders extends Model
{
protected $table = 'detail_orders';
    protected $primaryKey = 'id_detail';

    public function food()
    {
        return $this->hasOne('App\itemlibrary', 'id', 'id');
    }

    public function transaksi()
    {
        return $this->belongsTo('App\Transaksi');
    }
}
