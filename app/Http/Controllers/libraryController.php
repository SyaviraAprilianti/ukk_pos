<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemlibrary;
use App\categori;
use App\outlet;
use App\Exports\itemlibraryExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use PDF;

class libraryController extends Controller
{
    public function index()
    {
        $itemlibrary = itemlibrary::all();
        $categori = categori::all();
        $outlet = outlet::all();
        $itemlibrarycount = itemlibrary::all()->count();
        $itemlibrarystock = itemlibrary::where('instock', '<=', 5)->toSql();
        // dd($itemlibrarystock);
        
        // return view('content.library.item_library');
        return view('content.library.itemlibrary',['itemlibrary' => $itemlibrary, 'itemlibrarycount' => $itemlibrarycount, 'categori' => $categori, 'outlet' => $outlet]);
    }
    
    public function create(Request $request)
    { 
        
        $gambar = $request->file('gambar');
        $file_gambar = $gambar->getClientOriginalName();
        $gambar->move(base_path('/public/gambar'), $file_gambar);

        itemlibrary::create([
           
            'name'=>$request->name,
            'category'=>$request->category,
            'pricing'=>$request->pricing,
            'instock'=>$request->instock,
           'gambar' => $file_gambar,
             
isan 
            ]);
            
            
            return redirect('/itemlibrary');
        }
        
        public function editlib($id, Request $request)
        {
            $this->validate($request,[
                'name' => 'required',
                'category' => 'required',
                'pricing' => 'required',
                'instock' => 'required',
                 
                
                
                ]);
                
                $itemlibrary = itemlibrary ::find($id);
                $itemlibrary->name = $request->name;
                $itemlibrary->category = $request->category;
                $itemlibrary->pricing = $request->pricing;
                $itemlibrary->instock = $request->instock;
               

                if($request->hasFile('gambar')) {
                // $gambar = $request->file('gambar');
                // $file_gambar = $gambar->getClientOriginalName();
                // $gambar->move(base_path('/public/gambar'), $file_gambar);
                // $itemlibrary->gambar = $request->file('gambar')->getClientOriginalName();
                    echo "ada";
                }else{
                    echo"kosong";
                }
                
                
                // $itemlibrary->save();
                
                // return redirect('/itemlibrary');
            }
            
            public function edits(Request $request){
                $id= $request->id;
                $gambar = $request->file('gambar');
                $file_gambar = $gambar->getClientOriginalName();
                $gambar->move(base_path('/public/gambar'), $file_gambar);

                $edit = itemlibrary::where('id', $id)->update(array(
                    'name' => $request->name,
                    'category' => $request->category,
                    'pricing' => $request->pricing,
                    'instock' => $request->instock,
                    'gambar' => $file_gambar 
                    
                ));
                if ($edit) {
                    echo "success";
                }else{
                    echo "fail";
                }
            }
            
            public function delete($id)
            {
                $itemlibrary = itemlibrary::find($id);
                $itemlibrary->delete();
                return redirect('/itemlibrary');
            }
            
            //export excel
            public function export_excel()
            {
                return Excel::download(new itemlibraryExport, 'itemlibrary.xlsx');
            }
            
            public function cetak_pdf()
            {
                $itemlibrary = itemlibrary::all();
                
                $pdf = PDF::loadview('pdf.itemlibrary_pdf',['itemlibrary'=>$itemlibrary]);
                return $pdf->download('itemlibrary.pdf');
            }
        }
