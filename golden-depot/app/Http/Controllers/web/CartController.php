<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Variant;
use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart');
        if (isset($cart['items'])) {
            foreach ($cart['items'] as $id => $productData) {
                $product = isset($productData[0]) ? $productData[0] : $productData;
                $price = $product['item']->price;
                $quantity = $product['item_quantity'];
                $cartitemstotal = $cart['total'];
                $productcount = $cart['count'];
                $item_total = $product['item_total'];
                $variant = $product['variant'];

                $items[] = [
                    'id' => $product['item']->id,
                    'title' => $product['item']->title,
                    'featured_img' => $product['item']->featured_img,
                    'price' => $price,
                    'quantity' => $quantity,
                    'total' => $cartitemstotal,
                    'item_total' => $item_total,
                    'productcount' => $productcount,
                    'variant' => $variant,
                ];
            }
        }

        dd($items);
        return view('screens.web.cart.index', get_defined_vars());
    }

    public function addToCart(Request $request)
    {
        try {
            $productId = $request->productId;
            $quantity = $request->quantity;
            if ($request->variant) {
                $variantKeys = implode('-', array_map(function ($entry) {
                    return $entry['variantID'];
                }, $request->variant));
                $itemKey = $productId . '-' . $variantKeys;
            } else {
                $itemKey = $productId;
            }
            $product = Product::find($productId);
            $totalPrice = $product->price * $quantity;
            $cart = session()->get('cart', []);

            if (!isset($cart['items'][$itemKey])) {
                $cart['items'][$itemKey] = [
                    'item' => $product,
                    'item_quantity' => $quantity,
                    'item_total' => $totalPrice,
                    'variant' => $request->variant,
                ];
            } else {
                $cart['items'][$itemKey]['item_quantity'] = $quantity;
                $cart['items'][$itemKey]['item_total'] = $totalPrice;
            }

            $totalCartPrice = 0;
            foreach ($cart['items'] as $cartItem) {
                $totalCartPrice += $cartItem['item_total'];
            }

            $totalproducts = count($cart['items']);
            $cart['total'] = $totalCartPrice;
            $cart['count'] = $totalproducts;

            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => "Item Added to Cart",
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    public function delete(Request $request)
    {
        try {
            if ($request->productId) {
                $cart = session()->get('cart');

                if (isset($cart['items'][$request->productId])) {
                    unset($cart['items'][$request->productId]);
                    $totalproducts = count($cart['items']);
                    $totalCartPrice = 0;
                    foreach ($cart['items'] as $item) {
                        $totalCartPrice += $item['item_total'];
                    }
                    $cart['total'] = $totalCartPrice;
                    $cart['count'] = $totalproducts;

                    if (empty($cart['items'])) {
                        session()->forget('cart');
                    } else {
                        session()->put('cart', $cart);
                    }

                    return response()->json([
                        'success' => true,
                        'message' => "Item Deleted from Cart",
                        'cart' => $cart,
                    ]);
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Item Deleted to Cart",
            ]);
        }
    }

    public function update(Request $request)
    {
        try {
            $cart = session()->get('cart');
            $productId = $request->id;
            $quantity = $request->quantity;

            if (isset($cart['items'][$productId])) {
                $item = $cart['items'][$productId]['item'];
                $price = $item->price;
                $itemTotal = $price * $quantity;

                $cart['items'][$productId]['item_quantity'] = $quantity;
                $cart['items'][$productId]['item_total'] = $itemTotal;

                $totalCartPrice = 0;
                foreach ($cart['items'] as $item) {
                    $totalCartPrice += $item['item_total'];
                }

                $cart['total'] = $totalCartPrice;
                $cart['count'] = count($cart['items']);

                session()->put('cart', $cart);

                return response()->json([
                    'success' => true,
                    'message' => 'Cart updated successfully',
                    'cart' => $cart,
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => "Item Updated to Cart",
            ]);
        }
    }
}