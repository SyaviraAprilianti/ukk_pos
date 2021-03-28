<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modifiers;
use App\categori;

class modifiersController extends Controller
{
    public function modifiers()
    {
        $modifiers = modifiers::all();
        $categori = categori::all();
        $modifierscount = modifiers::all()->count();
        return view('content.library.modifiers',['modifiers' => $modifiers ,'modifierscount' => $modifierscount, 'categori' => $categori]);
    }

    public function create(Request $request)
    {
        modifiers::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'categori'=>$request->categori,
        ]);

        return redirect('/modifiers');
    }

    public function editmod($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'categori' => 'required',
        ]);
    
        $modifiers = modifiers::find($id);
        $modifiers->name = $request->name;
        $modifiers->price= $request->price;
         $modifiers->categori= $request->categori;
        
        
        $modifiers->save();

    return redirect('/modifiers');
    }

    public function edits(Request $request){
        $id= $request->id;
        $edit = modifiers::where('id', $id)->update(array(
            'name' => $request->name,
            'price' => $request->price,
            'categori' => $request->categori,
        ));
        if ($edit) {
            echo "success";
        }else{
            echo "fail";
        }
    }

    public function delete($id)
{
    $modifiers = modifiers::find($id);
    $modifiers->delete();
    return redirect('/modifiers');
}
}
