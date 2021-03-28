<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemlibrary;
use App\detailorders;
use App\transaksi;
use App\categori;
use App\taxes;
use App\discount;
use App\gratuity;
use App\modifiers;
use App\salestype;

class kasirController extends Controller
{
    public function index()
    {
        $itemlibrary = itemlibrary::all();
        // $makanan = itemlibrary::where('category','Makanan')->get();
        // $minuman = itemlibrary::where('category','Minuman')->get();
        // $dessert = itemlibrary::where('category','Dessert')->get(); 
        $discount = discount::all();
        $gratuity = gratuity::all();
        $modifiers = modifiers::all();
         $modifiersmakan = modifiers::where('categori','Makanan')->get();
         $modifiersminum = modifiers::where('categori','Minuman')->get();
         $modifiersdessert = modifiers::where('categori','Dessert')->get();
        $salestype = salestype::all();
        return view('transaksi.index',compact('itemlibrary', 'discount', 'modifiers', 'gratuity', 'salestype', 'modifiers', 'modifiersmakan', 'modifiersminum','modifiersdessert'));
    }
    public function modifiers($category)
    {
       $modifiersmakan = modifiers::where('categori',$category)->get();
       return $modifiersmakan;
    }
    public function taxes(){
        $taxes = taxes::all()->get();
        return $taxes;
    }
    public function discount(){
        return $discount;
    }
    public function gratuity(){
        $gratuity = gratuity::all()->get();
        return $gratuity;
    }

    public function makanan(){
        $makanan = itemlibrary::where('category','Makanan')->get();
        return $makanan;
    }

    public function minuman(){
        $minuman = itemlibrary::where('category','Minuman')->get();
        return $minuman;
    }

    public function dessert(){
        $dessert = itemlibrary::where('category','Dessert')->get();
        return $dessert;
    }

    public function invoice()
    {
        $transaksi = transaksi::all();
        return view('transaksi.voicemenu',['transaksi'=> $transaksi]);

    }
    
public function store(Request $request)
    {
        $transaksi = new transaksi();
        $transaksi->total_bayar = $request->totalprice;
        $transaksi->save();
        $idtransaksi = $transaksi->id_transaksi;

        $foods = $request->order;
        $data = array();
        foreach ($foods as $itemlibrary) {
            $data[] = [ 
                'id' => $itemlibrary['id'],
                'qty' => $itemlibrary['qty'],
                'id_transaksi' => $idtransaksi
            ];
        }
        detailorders::insert($data);
        return $data;
    }
    
    public function orderan()
    {
        $transaksi = transaksi::with('detailorders')->get();
        return view('transaksi.order', compact('transaksi'));
    }

    public function orderanpdf(Request $request)
    {
        $transaksi = transaksi::with('detailorders')->get();
        $pdf = PDF::loadView('transaksi.orderpdf', compact('transaksi'));
        return $pdf->stream();
    }

    //  public function beli(Request $request){
    //     transaksi::create([
    //         'tanggal_order' =>$request->tgl,
    //         'total_bayar' =>$request->total_bayar
            
    //     ]);
    //     return redirect('/order');
    // }

    public function delete($id_transaksi){
        $transaksi = transaksi::find($id_transaksi);
        $transaksi->delete();
        return redirect('/invoice');

      }
}
