<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class AdminUserContactController extends Controller
{
    public function index(){

        $contactuser = ContactUs::all();

        return view('screens.admin.contact_us.user-contacts', get_defined_vars());
    }
}
