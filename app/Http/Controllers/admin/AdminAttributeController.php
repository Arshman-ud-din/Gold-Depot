<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AdminAttributeController extends Controller
{

    public function index(){

        $attributes = Attribute::all();

        return view('screens.admin.attribute.index', get_defined_vars());
    }
    public function create(){

        return view('screens.admin.attribute.create');
    }
    public function store(Request $request){

        Attribute::create([

            'name' => $request->name,
        ]);

        return redirect()->route('adminattribute.index')->with('attributecreate','Attriibute Added Successfully');

    }
    public function edit($id){

        $attribute = Attribute::find($id);

        return view('screens.admin.attribute.edit',get_defined_vars());
    }

    public function update(Request $request, $id){

        $attribute = Attribute::find($id);

        $attribute->update([

            'name' => $request->name,
        ]);

        return redirect()->route('adminattribute.index')->with('updateattribute','Attribute Updated Successfully');
    }

    public function delete($id){

        Attribute::find($id)->delete();

        return redirect()->route('adminattribute.index');
    }
}
