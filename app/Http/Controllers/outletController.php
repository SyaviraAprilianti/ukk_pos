<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\outlet;
use App\Province;
use App\Regency;
use App\District;
use App\Village;

class outletController extends Controller
{
    public function outlet()
    {
        $outlet = outlet::all();
        $outletcount = outlet::all()->count();
        return view('content.account.outlet',['outlet' => $outlet ,'outletcount' => $outletcount ]);
    }
    
    public function create(Request $request )
    {
        outlet::create([
            // cb bikin kek biasa deh, gua gatau inputannya apa aje, itu yg keambil id nya?  bentarrr lupaa
            
            
            
            'name'=>$request->outlet_name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'id_provinces'=>$request-> provinces,
            'id_regencies' => $request ->regencies,
            'id_districts' => $request->districts,
            'id_villages' => $request->villages,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            ]);
            return redirect('/outlet');
        }
        public function editoutlet($id, Request $request)
        {
            $this->validate($request,[
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'id_provinces' => 'required',
                'id_regencies' => 'required',
                'id_districts' => 'required',
                'id_villages' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                
                
                
                ]);
                
                $outlet = outlet ::find($id);
                $outlet->name = $request->outlet_name;
                $outlet->address = $request->address;
                $outlet->phone = $request->phone;
                $outlet->id_provinces = $request->id_provinces;
                $outlet->id_regencies = $request->id_regencies;
                $outlet->id_districts = $request->id_districts;
                $outlet->id_villages = $request->id_villages;
                $outlet->latitude = $request->latitude;
                $outlet->longitude = $request->longitude;
                // db = $request->nameview
              
                
                
                $outlet->save();
                
                return redirect('/outlet');
            }
            
            public function edits(Request $request){
                $id = $request->id;
                $edit = outlet::where('id', $id)->update(array(
                    'name' => $request->outlet_name,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'id_provinces' => $request->id_provinces,
                    'id_regencies'=> $request->id_regencies,
                    'id_districts' => $request->id_districts,
                    'id_villages' => $request->id_villages,
                    'latitude' => $request->latitude,
                    'longitude' => $request->longitude,
                ));
                if ($edit) {
                    echo "success";
                }else{
                    echo "fail";
                }
            }

            public function delete($id)
            {
                $outlet = outlet::find($id);
                $outlet->delete();
                return redirect('/outlet');
            }
            
        }
