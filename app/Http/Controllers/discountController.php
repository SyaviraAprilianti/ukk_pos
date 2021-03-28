<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\discount;

class discountController extends Controller
{
    public function discount()
    {
    	$discount = discount::all();
    	return view('content.library.discount',['discount' => $discount]);
    }

    public function create(Request $request)
    {
        discount::create([
            'name'=>$request->name,
            'amount'=>$request->amount,
        ]);

        return redirect('/discount');
    }

    public function editdis($id, Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'amount' => 'required',
        ]);
    
        $discount = discount::find($id);
        $discount->name = $request->name;
        $discount->amount= $request->amount;

        $discount->save();

    return redirect('/discount');
    }

    public function editdisc(Request $request){
        $id= $request->id;
        $edit = discount::where('id', $id)->update(array(
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
    $discount = discount::find($id);
    $discount->delete();
    return redirect('/discount');
}

}
