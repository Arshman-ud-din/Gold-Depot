<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCheckoutRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductVariant;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index()
    {
        return view('screens.web.checkout.index');
    }
    public function create()
    {

        $cart = session('cart');

        // dd($cart);
        if (isset($cart['items'])) {
            foreach ($cart['items'] as $id => $productData) {

                $product = isset($productData[0]) ? $productData[0] : $productData;
                // dd($product);

                $variants = [];

                if (isset($productData['group_variants']) && is_array($productData['group_variants'])) {
                    foreach ($productData['group_variants'] as $attrName => $variantArray) {
                        foreach ($variantArray as $variant) {
                            $variants[$attrName] = $variant['name'];
                        }
                    }
                }

                // dd($variants);  




                $cartitemstotal = $cart['total'];
                $item_total = $product['item_total'];

                $products[] = [
                    'id' => $product['item']->id,
                    'title' => $product['item']->title,
                    'featured_img' => $product['item']->featured_img,
                    'total' => $cartitemstotal,
                    'item_total' => $item_total,
                    'variants' => $variants,
                ];

            }
        }
        // dd($products);
        return view('screens.web.checkout.index', get_defined_vars());
    }

    public function store(StoreCheckoutRequest $request)
    {
        $cart = session('cart');

        // dd($cart['items']);
        // dd($cart, $request->all());
        if (!$cart || empty($cart['items'])) {
            return back();
        }

        $user = auth()->user();

        // dd($user->id);


        $order = Order::create([

            'user_id' => $user->id,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'city' => $request->city,
            'country' => $request->country,
            'street_address' => $request->street_address,
            'postal_code' => $request->postal_code,
            'state' => $request->state,
            'status' => 'pending',
            'total' => $cart['total'],
        ]);

        foreach ($cart['items'] as $id => $item) {

            $product = $item['item']; 

            if ($product->quantity >= $item['item_quantity']) {

                $product->quantity -= $item['item_quantity'];
                $product->save();
            } else {

                return back()->with('emptyquantity', 'stock khatam');
            }

            $variants = [];

            if (isset($item['group_variants']) && is_array($item['group_variants'])) {
                foreach ($item['group_variants'] as $attrName => $variantArray) {
                    foreach ($variantArray as $variant) {
                        $variants[] = ['id' => $variant['id']];
                    }
                }
            }

            foreach ($variants as $variant) {
                $orderproduct = OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'product_name' => $product->title,
                    'product_price' => $product->price,
                    'product_quantity' => $item['item_quantity'],
                    'total' => $cart['total'],
                    'variant_id' => $variant['id'],
                ]);
            }

            if (isset($item['group_variants']) && is_array($item['group_variants'])) {
                foreach ($item['group_variants'] as $attrName => $variantArray) {
                    foreach ($variantArray as $variant) {
                        OrderProductVariant::create([
                            'order_product_id' => $orderproduct->id,
                            'attribute_name' => strtolower($attrName),
                            'name' => $variant['name'],
                        ]);
                    }
                }
            }
        }
        session()->forget('cart');

        return redirect()->route('checkout.invoice', ['order_id' => $order->id])
            ->with('ordersuccess', 'Your order has been placed successfully!');


    }


    public function invoice($order_id)
    {
        $orders = Order::with('orderproducts')->find($order_id);
        // dd($orders->status);

        // dd($orders->orderproducts[1]);

        return view('screens.web.checkout.invoice', get_defined_vars());
    }

    public function downloadpdf($id)
    {
        $orders = Order::with('orderproducts')->find($id);

        $pdf = Pdf::loadView('screens.web.checkout.invoice', ['orders' => $orders]);

        // dd($pdf);

        return $pdf->download('invoice.pdf');
    }


}
