<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    public function index(Request $request){


        $products = Product::all();


        $products->galleryimage->create([

            'product_id' => $products->id,
            'images' => $products->images,
        ]);




    }
}
