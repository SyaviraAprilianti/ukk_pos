<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey = 'id_transaksi';

    protected $fillable = ['id_transaksi', 'order_id', 'total_bayar', 'tanggal_order'];

}
