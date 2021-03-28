<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\salestype;

class salestypeController extends Controller
{
    public function salestype()
    {
        $salestype = salestype::all();
        return view('content.library.sales_type', ['salestype' => $salestype]);
    }

    public function create(Request $request)
    {
        salestype::create([
            'salestype_name' => $request->sales_name,
        ]);

        return redirect('/salestype');
    }

    public function editST($id, Request $request)
    {
        $this->validate($request, [
            'salestype_name' => 'required',


        ]);

        $salestype = salestype::find($id);
        $salestype->sales_name = $request->sales_name;
        $salestype->save();

        return redirect('/salestype');
    }

    public function editSal(Request $request)
    {
        $id = $request->id;
        $edit = salestype::where('id', $id)->update(array(
            'salestype_name' => $request->sales_name,
        ));
        if ($edit) {
            echo "success";
        } else {
            echo "fail";
        }
    }

    public function delete($id)
    {
        $salestype = salestype::find($id);
        $salestype->delete();
        return redirect('/salestype');
    }
}
