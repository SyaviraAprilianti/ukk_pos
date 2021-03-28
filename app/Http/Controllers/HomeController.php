<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\transaksi;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboardAdmin()

    {  
         $transaksi = transaksi::all();
        $transaksicount = transaksi::all()->count();
        $transaksisum = transaksi::all()->sum('transaksi.total_bayar');
            if (Auth::user()->role == 'admin'){
                 return view('dashboard_component.dashboardadmin',compact('transaksi' , 'transaksicount' , 'transaksisum'));
            }else{
                return view('404');
            }
             
    }

    public function dashboardKasir()
    {
         $transaksi = transaksi::all();
        $transaksicount = transaksi::all()->count();
        $transaksisum = transaksi::all()->sum('transaksi.total_bayar');
       if (Auth::user()->role == 'kasir'){
                return view('dashboard_component.dashboardkasir');
            }else{
                return view('404');
            }
              
    }

    public function gmaps()
    {   
        
    	$outlet = DB::table('outlet')->get();
    	return view('gmaps',compact('outlet'));
    }
}
