<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function index(){
        $reviews = ProductReview::all();
        return view('screens.admin.feedback.feedback', get_defined_vars());
    }

}
