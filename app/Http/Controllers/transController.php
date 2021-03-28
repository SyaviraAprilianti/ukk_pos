<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Http\Controllers\Controller;
use App\Exports\transaksiExport;

class transController extends Controller
{
    public function index()
    {
        $transaksi = transaksi::all();
        $transaksicount = transaksi::all()->count();
        
         return view('content.report.transactions', ['transaksi' => $transaksi , 'transaksicount'=>$transaksicount]);
    }

    public function export_excel()
 {
 return Excel::download(new transaksiExport, 'transaksi.xlsx');
 }

 public function cetak_pdf()
    {
     $transaksi = transaksi::all();
 
     $pdf = PDF::loadview('pdf.transaksi_pdf',['transaksi'=>$transaksi]);
     return $pdf->download('transaksi.pdf');
    }
}
