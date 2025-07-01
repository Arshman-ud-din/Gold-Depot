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
        // session()->flush();
        $cart = session('cart');
        $item = [];
        // $variants = Variant::all();
        // dd($cart);
        if (isset($cart['items'])) {
            foreach ($cart['items'] as $id => $productData) {

                $product = isset($productData[0]) ? $productData[0] : $productData;
                // dd($product);
                $price = $product['item']->price;
                $quantity = $product['item_quantity'];
                $cartitemstotal = $cart['total'];
                $productcount = $cart['count'];
                $item_total = $product['item_total'];
                // $variantss = $product['variant'];
                // dd($product['item']);

                $productattr = Product::with(['variants.attribute'])->find($product['item']->id);

                // dd($productattr); 

                $groupVariants = [];

                foreach ($productattr->variants as $variant) {
                    $groupVariants[$variant->attribute->name][] = [
                        'id' => $variant->id,
                        'name' => $variant->name,
                        'price' => $variant->pivot->price ?? 0 
                    ];
                }

                $items[$id] = [
                    'id' => $product['item']->id,
                    'title' => $product['item']->title,
                    'featured_img' => $product['item']->featured_img,
                    'price' => $price,
                    'quantity' => $quantity,
                    'total' => $cartitemstotal,
                    'item_total' => $item_total,
                    'productcount' => $productcount,
                    // 'variantss' => $variantss,
                    'group_variants' => $groupVariants,
                ];

            }

        }

        // dd($items);
        return view('screens.web.cart.index', get_defined_vars());
    }

    public function addToCart(Request $request)
    {
        // dd($request->all());
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
            // dd($itemKey);
            $variantsprice = [];
            foreach ($request->variant as $variants) {

                $variantprice[] = $variants['variantprice'];
            }
            // dd($variantprice);
            $varianttotal = array_sum($variantprice);
            $product = Product::find($productId);
            $totalPrice = $product->price * $quantity + $varianttotal;
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
            // dd($cart);

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
            $productId = $request->productId;
            $cart = session('cart');

            if ($productId && isset($cart['items'][$productId])) {
                unset($cart['items'][$productId]);

                $cart['total'] = collect($cart['items'])->sum('item_total');
                $cart['count'] = count($cart['items']);

                if (empty($cart['items'])) {
                    session()->forget('cart');
                } else {
                    session()->put('cart', $cart);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Item deleted from cart',
                    'cart' => $cart,
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Item not found in cart',
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong while deleting item',
            ]);
        }
    }




    public function update(Request $request)
    {
        // dd($request->all());
        try {
            $cart = session()->get('cart', ['items' => [], 'total' => 0, 'count' => 0]);
            $newitemid = $request->previousitemid;
            $quantity = (int) $request->quantity;

            // 🔑 Build itemKey from variants
            if ($request->has('variant')) {
                $variantKeys = implode('-', array_map(function ($entry) {
                    return $entry['variantID'];
                }, $request->variant));
                $itemKey = $newitemid . '-' . $variantKeys;
            } else {
                $itemKey = $newitemid;
            }

            // ❌ Remove all existing variants of the same product (except the current one)
            foreach ($cart['items'] as $key => $item) {
                if (str_starts_with($key, $newitemid) && $key !== $itemKey) {
                    unset($cart['items'][$key]);
                }
            }

            // ✅ Get product
            $product = Product::findOrFail($newitemid);
            $price = (float) $product->price;

            // ✅ Variant prices (like size XL +500, color red +100)
            $variantTotal = 0;
            if ($request->has('variant')) {
                $variantTotal = array_sum(array_column($request->variant, 'variantprice'));
            }
            // dd($variantTotal);
            // ✅ Final item total
            $itemTotal = ($price * $quantity) + $variantTotal;


            // ✅ Add updated item to cart
            $cart['items'][$itemKey] = [
                'item' => $product,
                'item_quantity' => $quantity,
                'item_total' => $itemTotal,
                'group_variants' => $this->getProductVariants($request->variant ?? []),
                'variant' => $request->variant // store variant for future use (if needed)
            ];

            // ✅ Recalculate total
            $cart['total'] = collect($cart['items'])->sum('item_total');
            $cart['count'] = count($cart['items']);

            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Cart updated successfully',
                'cart' => $cart,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }

    private function getProductVariants($selected)
    {
        $grouped = [];
        foreach ($selected as $entry) {
            $grouped[$entry['attrName']][] = [
                'id' => $entry['variantID'],
                'name' => $entry['variantName'],
                'selected' => true // ✅ Mark selected for dropdown
            ];
        }
        return $grouped;
    }











}






