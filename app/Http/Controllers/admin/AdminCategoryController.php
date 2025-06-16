<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return view('screens.admin.category.show-category', get_defined_vars());
    }

    public function create()
    {

        return view('screens.admin.category.add-category');
    }

    public function store(StoreCategoryRequest $request)
    {

        if ($request->has('img')) {
            $imagename = time() . '_' . $request->img->getClientOriginalName();
            $request->img->move(public_path('images'), $imagename);

        } else {
            $imagename = '';
        }

        // dd($imagename);

        Category::create([

            'name' => $request->name,
            'image' => $imagename,
        ]);

        return redirect()->route('admincategory.index')->with('addcategorysuccess', 'Category Has Been Added');

    }

    public function edit($id)
    {

        $category = Category::find($id);

        return view('screens.admin.category.edit-category', get_defined_vars());
    }

    public function update(StoreCategoryRequest $request, $id)
    {

        $Category = Category::find($id);

        if ($request->has('img')) {
            $imagename = time() . '_' . $request->img->getClientOriginalName();
            $request->img->move(public_path('images'), $imagename);

        } else {
            $imagename = $Category->image;
        }

        $Category->update([

            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagename,
        ]);

        return redirect()->route('admincategory.index')->with('updatesuccess', 'Category Has Been Updated');
    }

    public function delete($id)
    {
        Category::find($id)->delete();

        return redirect()->route('admincategory.index')->with('daletesuccess','Category Has Been Deleted');
    }


}
