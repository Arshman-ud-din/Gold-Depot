<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {

        $users = User::count();
        $orders = Order::count();
        $products = Product::count();
        // dd($users);
        return view('screens.admin.dashboard.index', get_defined_vars());
    }



}
