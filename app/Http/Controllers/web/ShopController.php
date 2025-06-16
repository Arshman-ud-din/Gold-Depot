<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('screens.web.shop.index', get_defined_vars());
    }

    public function show($product_id)
    {
        $product = Product::find($product_id);
        return view('screens.web.product.show', get_defined_vars());
    }
}
