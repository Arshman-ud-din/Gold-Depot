<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variant;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('screens.admin.product.show-product', get_defined_vars());
    }


    public function create()
    {
        $attrs = Attribute::all();
        $varr = Variant::all();
        $categories = Category::all();


        // dd($attrs);
        return view('screens.admin.product.add-product', get_defined_vars());
    }
    public function store(Request $request)
    {

        if ($request->has('featured_img')) {
            $featured_img = time() . '_' . $request->featured_img->getClientOriginalName();
            $request->featured_img->move(public_path('images/featured'), $featured_img);

        } else {
            $featured_img = '';
        }
        $category = Category::find($request->category_id);

        $product = $category->products()->create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'featured_img' => $featured_img,
            'images' => 'images',
            'category_id' => $request->category_id,
        ]);
        // dd($request->all());

        if ($request->has('attribute_id') && $request->has('variant_id')) {

            $attribute_ids = $request->attribute_id;
            $variant_ids = $request->variant_id;

            // dd($attribute_ids, $variant_ids);

            $product->productAttributes()->attach($attribute_ids);
            $product->variants()->attach($variant_ids);

        }

        // dd($request->all());
        if ($imagesfiles = $request->file('images')) {
            // dd($imagesfiles);

            foreach ($imagesfiles as $image) {
                // dump($image);
                $imagename = time() . '.' . $image->getClientOriginalName();
                $image->move(public_path('images/gallery'), $imagename);

                $product->galleryimages()->create([
                    'images' => $imagename,
                ]);

            }

            // dd($products);

        }

        // dd($products);

        return redirect()->route('adminproduct.index')->with('productsuccess', 'Product created successfully!');
    }

    public function edit($id)
    {
        $product = Product::with('variants.attribute')->find($id);
        $productAttributes = Attribute::all();
        $variants = Variant::all();
        $categories = Category::all();

        // dd($product);

        return view('screens.admin.product.edit', get_defined_vars());
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        if ($request->has('featured_img')) {
            $featured_img = time() . '_' . $request->featured_img->getClientOriginalName();
            $request->featured_img->move(public_path('images/featured'), $featured_img);
        } else {
            $featured_imgg = $product->featured_img;
        }
        // dd($featured_img);

        $product->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'featured_img' => $featured_img ?? $featured_imgg,
            'images' => 'images',
            'category_id' => $request->category_id,
        ]);

        if ($request->has('attribute_id') && $request->has('variant_id')) {

            $attribute_ids = $request->attribute_id;
            $variant_ids = $request->variant_id;

            // dd($attribute_ids, $variant_ids);

            $product->productAttributes()->sync($attribute_ids);
            $product->variants()->sync($variant_ids);

        }

        if ($imagesfiles = $request->file(key: 'images')) {
            $galleryimage = $product->galleryimages;

            foreach ($imagesfiles as $index => $image) {
                if (isset($galleryimage[$index])) {
                    $imagename = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images/gallery'), $imagename);

                    $galleryimage[$index]->update([
                        'images' => $imagename,
                    ]);
                } else {
                    $images = $galleryimage;

                    $galleryimage[$index]->update([
                        'images' => $images,
                    ]);
                }
            }
        }

        return redirect()->route('adminproduct.index');
    }


    public function delete($id)
    {

        Product::find($id)->delete();
        return redirect()->route('adminproduct.index');
    }
    public function productdetail($id)
    {

        $product = Product::with('variants.attribute')->find($id);

        return view('screens.admin.product.product-detail', get_defined_vars());
    }


}

