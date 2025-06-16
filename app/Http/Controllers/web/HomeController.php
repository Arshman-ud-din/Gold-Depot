<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Carousel;
use App\Models\Order;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $reviews = ProductReview::all();
        $blogs = Blog::all();
        $products = Product::all();
        $carouselimages = Carousel::all();
        $count = session('cart.count');

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Cart count fetched successfully',
                'cart' => [
                    'count' => $count,
                ]
            ]);
        }

        return view('screens.web.home.index', get_defined_vars());
    }








    public function profile()
    {
        $user = auth()->user();
        // dd($user->id);

        return view('screens.web.profile.index', get_defined_vars());
    }

    public function orders()
    {
        $user = auth()->user();

        $orders = $user->orders()->with('orderproducts')->get();

        // dd($orders->orderproducts);

        return view('screens.web.checkout.order', get_defined_vars());
    }




}
