<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransaksItem extends Model
{
    protected $table = "transaksi_item";
    protected $primaryKey = 'id';

    protected $fillable = ['id_transaksi', 'id_itemlibrary'];
}
