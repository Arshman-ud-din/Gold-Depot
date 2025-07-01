<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        // dd($request->all());

        $searchproduct = $request->search;

        $product = Product::where('title', 'like', '%' . $searchproduct . '%')->with('category')->take(5)->get();

        if ($product->isEmpty()) {

            return response()->json([

                'success' => 'false',
                'message' => 'Product Not Found',
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'search Value send successfully',
            'products' => $product,
        ]);
    }
}
