<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use App\Exports\suppliersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;


class inventoryController extends Controller
{
   public function inven()
    {
    	$suppliers = supplier::all();
    	return view('content.inventory.suppliers',['suppliers' => $suppliers]);
    }

    public function create(Request $request)
    {
        supplier::create([
            'name'=>$request->nama,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);

        return redirect('/suppliers');
    }

            
    public function editsup($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',

            
        ]);
    
        $suppliers = supplier::find($id);
        $suppliers->name = $request->nama;
        $suppliers->address= $request->address;
        $suppliers->phone= $request->phone;
        $suppliers->email = $request->email;
        
        
        $suppliers->save();

    return redirect('/suppliers');
    }

    public function edits(Request $request){
        $id= $request->id;
        $edit = supplier::where('id', $id)->update(array(
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
        ));
        if ($edit) {
            echo "success";
        }else{
            echo "fail";
        }
    }
public function delete($id)
{
    $suppliers = supplier::find($id);
    $suppliers->delete();
    return redirect('/suppliers');
}

public function export_excel()
 {
 return Excel::download(new suppliersExport, 'suppliers.xlsx');
 }

 public function cetak_pdf()
    {
     $suppliers = supplier::all();
 
     $pdf = PDF::loadview('pdf.suppliers_pdf',['suppliers'=>$suppliers]);
     return $pdf->download('suppliers.pdf');
    }
}
