<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemlibrary;
class MidtransController extends Controller
{
    private function midtransInit()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }

    public function getSnapToken(Request $request){
        $this->midtransInit();
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' =>$request->total,
            ),
            'customer_details' => array(
                'first_name' => 'Syavira',
                'email' => 'syaviraaprilianti@example.com',
                'phone' => '08111222333',
            ),
        );
        return \Midtrans\Snap::getSnapToken($params);
    }

    public function transaction(Request $request)
    {
        $transaksi = \App\transaksi::create([
            'order_id' => $request->order_id, 
            'total_bayar' => $request->total_bayar, 
            'tanggal_order' => date('Y-m-d')
        ]);
        return $transaksi->id_transaksi;
    }

    public function transaction_item(Request $request)
    {
        $itemlibrary = itemlibrary::where('id', $request->id_itemlibrary)->first();
        $itemlibrary->instock= $itemlibrary->instock - $request->instock;
        $itemlibrary->save();
    }
}
