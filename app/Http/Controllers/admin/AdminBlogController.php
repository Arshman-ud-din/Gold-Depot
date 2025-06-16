<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index()
    {

        $blog = Blog::all();

        return view('screens.admin.blog.show-blog', get_defined_vars());
    }
    public function create()
    {

        return view('screens.admin.blog.add-blog');
    }

    public function store(Request $request)
    {

        if ($request->has('img')) {
            $imagename = time() . '_' . $request->img->getClientOriginalName();
            $request->img->move(public_path('images/blog'), $imagename);

        } else {
            $imagename = '';
        }

        Blog::create([

            'title' => $request->title,
            'description' => $request->title,
            'img' => $imagename,
        ]);


        return redirect()->route('adminblog.index')->with('blogaddsuccess', 'Blog Has been Added ');

    }

    public function edit($id)
    {

        $blog = Blog::find($id);
        return view('screens.admin.blog.edit-blog', get_defined_vars());
    }

    public function update(Request $request, $id)
    {

        $blog = Blog::find($id);

        if ($request->has('img')) {
            $imagename = time() . '_' . $request->img->getClientOriginalName();
            $request->img->move(public_path('images'), $imagename);

        } else {
            $imagename = $blog->img;
        }

        $blog->update([

            'title' => $request->title,
            'description' => $request->description,
            'img' => $imagename,
        ]);
        return redirect()->route('adminblog.index')->with('blogupdate', 'Blog Has Been Updated');

    }

    public function delete($id)
    {

        Blog::find($id)->delete();

        return redirect()->route('adminblog.index')->with('blodelete', 'Your Blog Has Been Deleted');

    }
}
