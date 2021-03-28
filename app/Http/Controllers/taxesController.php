<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\taxes;

class taxesController extends Controller
{
    public function taxes()
    {
    	$taxes = taxes::all();
    	return view('content.library.taxes',['taxes' => $taxes]);
    }

    public function create(Request $request)
    {
        taxes::create([
            'name'=>$request->name,
            'amount'=>$request->amount,
        ]);

        return redirect('/taxes');
    }

    public function edittax($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'amount' => 'required',
        ]);
    
        $taxes = taxes::find($id);
        $taxes->name = $request->name;
        $taxes->amount= $request->amount;

        $taxes->save();

    return redirect('/taxes');
    }

    public function editcc(Request $request){
        $id= $request->id;
        $edit = taxes::where('id', $id)->update(array(
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
    $taxes = taxes::find($id);
    $taxes->delete();
    return redirect('/taxes');
}
}
