<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brands;

class BrandsController extends Controller
{
    public function brands()
    {
        $brands = brands::all();
        return view('content.library.brands', ['brands' => $brands]);
    }

    public function create(Request $request)
    {
        brands::create([
            'brands_name' => $request->brand,
            'item_stocks' => $request->item,
        ]);

        return redirect('/brands');
    }

    public function delete($id)
    {
        $brands = brands::find($id);
        $brands->delete();
        return redirect('/brands');
    }

    public function editB($id, Request $request)
    {
        $this->validate($request, [
            'brands_name' => 'required',
            'item_stocks' => 'required',


        ]);

        $brands = brands::find($id);
        $brands->brand = $request->brand;
        $brands->item = $request->item;

        $brands->save();

        return redirect('/brands');
    }

    public function editBrands(Request $request)
    {
        $id = $request->id;
        $edit = brands::where('id', $id)->update(array(
            'brands_name' => $request->brand,
            'item_stocks' => $request->item,
        ));
        if ($edit) {
            echo "success";
        } else {
            echo "fail";
        }
    }

}
