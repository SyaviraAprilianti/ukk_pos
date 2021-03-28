<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\categori;
use App\itemlibrary;
use App\Exports\categoriesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class categoriesController extends Controller
{
     public function categories()
    {
    	$categories = categori::all();
        $item = itemLibrary::all();
        $count_stock = itemlibrary::where('category','Makanan')->count();
        $count_minum = itemlibrary::where('category','Minuman')->count();
        $count_dessert = itemlibrary::where('category','dessert')->count();
    	return view('content.library.categories',compact('item' , 'categories' , 'count_stock' , 'count_minum' , 'count_dessert'));
    }


    public function create(Request $request)
    {
        categori::create([
            'name'=>$request->name,
        ]);

        return redirect('/categories');
    }


    public function edit($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
    
        $categories = categori::find($id);
        $categories->name = $request->nama;
        $categories->save();

    return redirect('/categories');
    }

    public function edits(Request $request){
        $id= $request->id;
        $edit = categori::where('id', $id)->update(array(
            'name' => $request->name,
        ));
        if ($edit) {
            echo "success";
        }else{
            echo "fail";
        }
    }
public function delete($id)
{
   $categories = categori::find($id);
   $categories->delete();
    return redirect('/categories');
}

public function export_excel()
 {
 return Excel::download(new categoriesExport, 'categori.xlsx');
 }

 public function cetak_pdf()
    {
     $categories = categori::all();
 
     $pdf = PDF::loadview('pdf.categories_pdf',['categories'=>$categories]);
     return $pdf->download('categories.pdf');
    }
}
