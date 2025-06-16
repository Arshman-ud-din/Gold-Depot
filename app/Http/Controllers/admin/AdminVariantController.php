<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Variant;
use Illuminate\Http\Request;

class AdminVariantController extends Controller
{

    public function index()
    {

        $variants = Variant::with('attribute')->get();

        // dd($variants);
        return view('screens.admin.variant.index', get_defined_vars());
    }
    public function create()
    {
        $attributes = Attribute::all();

        // dd($attributes);
        return view('screens.admin.variant.create', get_defined_vars());
    }

    public function store(Request $request)
    {


        $attribute = Attribute::find($request->attribute_id);

        $attribute->variants()->create([

            'name' => $request->name,

        ]);

        return redirect()->route('adminvariants.index')->with('createvariant','Variant Addedd Successfully');
    }

    public function edit($id)
    {

        $variant = Variant::with('attribute')->find($id);
        $attribute = Attribute::all();
        // dd($variant);

        return view('screens.admin.variant.edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {

        $variant = Variant::find($id);

        $variant->update([
            'name' => $request->name,
            'attribute_id' => $request->attribute_id,
        ]);

        return redirect()->route('adminvariants.index')->with('updatevariant','Variant Updated Successfully');
    }

    public function delete($id){

        Variant::find($id)->delete();

        return redirect()->route('adminvariants.index')->with('variantdelete','Variat Deleted Successfully');
    }
}
