<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gratuity;

class gratuityController extends Controller
{
    public function gratuity()
    {
        $gratuity = gratuity::all();
        return view('content.library.gratuity',['gratuity' => $gratuity]);
    }
    
    public function create(Request $request)
    {
        gratuity::create([
            'name'=>$request->name,
            'amount'=>$request->amount,
            ]);
            
            return redirect('/gratuity');
        }
        
        public function editgrat($id, Request $request)
        {
            $this->validate($request,[
                'name' => 'required',
                'amount' => 'required',
                ]);
                
                $gratuity = gratuity::find($id);
                $gratuity->name= $request->name;
                $gratuity->amount= $request->amount;
                
                $gratuity->save();
                
                return redirect('/gratuity');
            }
            
            public function editgratuity (Request $request){
                $id= $request->id;
                $edit = gratuity::where('id', $id)->update(array(
                    'name' => $request->name,
                    'amount' => $request->amount,
                ));
                if ($edit) {
                    echo "success";
                }else{
                    echo "fail";
                }
            }
            public function delete($id)
            {
                $gratuity = gratuity::find($id);
                $gratuity->delete();
                return redirect('/gratuity');
            }
        }
