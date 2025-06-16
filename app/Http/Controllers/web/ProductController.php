<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\Review;
use App\Models\Attribute;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request, $category)
    {
        $cat = Category::find($category);
        $products = Product::where("category_id", $category)->get();
        return view('screens.web.product.index', get_defined_vars());
    }

    public function show($product_id)
    {
        // $user = auth()->user();

        // $product = Product::find($product_id);
        // $authproducts = OrderProduct::find($product_id);
        $product = Product::with('reviews', 'galleryimages', 'category', 'variants.attribute')->find(id: $product_id);
        $user = auth()->user();
        $groupedVariants = [];
        foreach ($product->variants as $variant) {
            $attrName = $variant->attribute->name;
            $groupedVariants[$attrName][] = $variant;
        }
        // dd($groupedVariants);

        if ($user) {
            $orderCount = Order::where('user_id', $user->id)
                ->whereHas('products', function ($orderDetailQuery) use ($product_id): void {
                    $orderDetailQuery->where('product_id', $product_id);
                })->count();
        } else {

            $orderCount = 0;

        }

        // dd($orderCount);
        return view('screens.web.product.show', get_defined_vars());
    }


    public function productreview(Request $request, $product_id)
    {

        // dd($request->product_id);

        $product = Product::find($request->product_id);

        // dd($product);


        $product->reviews()->create([
            'product_id' => $request->product_id,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'review' => $request->review,

        ]);

        return redirect()->route('web.index')->with('reviewsuccess', 'Review submitted successfully!');



    }


    // public function addToCart(Request $request,$id){

    //     dd($request->all());

    //     $product = Product::find($id);

    //     $cart = session()->get('product', []);

    //     // if(isset($cart[$id])){

    //     //     $cart[$id]['quantity']++;
    //     // }else{
    //     //     $cart[$id] = [

    //     //         'title' => $product->title,
    //     //         'price'=> $product->price,
    //     //         'quantity'=> $product->quantity,
    //     //         'featured_img' => $product->featured_img,
    //     //     ];
    //     // }

    //     // dd($cart);

    //     session()->put('cart', $cart);

    //     return back()->with('successcart','Add to Cart Successful');


    // }

}
