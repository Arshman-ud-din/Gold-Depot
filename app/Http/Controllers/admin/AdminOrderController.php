<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderProductVariant;
use DB;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('orderproducts')->get();
        // dd($orders);
        return view('screens.admin.order.order', get_defined_vars());
    }

    public function detail($id)
    {
        $order = Order::with('orderproducts')->findOrFail($id);

        $productIDs = $order->orderproducts->pluck('id')->toArray();

        $orderproductVariants = OrderProductVariant::whereIn('order_product_id', $productIDs)->get();

        return view('screens.admin.order.order-user-detail', compact('order', 'orderproductVariants'));
    }


    public function updatestatus(Request $request, $id)
    {
        DB::table('orders')
            ->where('id', $id)
            ->update([
                'status' => $request->status,
            ]);

        return redirect()->back()->with('updatestatus', 'Order status updated successfully!');
    }
}

