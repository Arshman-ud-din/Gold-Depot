<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {

        $products = Product::all();

        $attr = Attribute::with('variants')->get();

        // dd($attr);
        return view('screens.web.shop.index', get_defined_vars());
    }

    public function show($product_id)
    {
        $product = Product::find($product_id);
        return view('screens.web.product.show', get_defined_vars());
    }

    public function filter(Request $request)
    {
        $variantIds = $request->input('variants', []);

        // dd($variantIds);  

        if (!empty($variantIds)) {
            $products = Product::whereHas('variants', function ($query) use ($variantIds) {
                $query->whereIn('name', $variantIds);
            }, '=', count($variantIds))->with('productAttributes')->get();
        } else {
            $products = Product::with('productAttributes')->get();
        }

        return response()->json([
            'success' => true,
            'products' => $products
        ]);
    }








}
