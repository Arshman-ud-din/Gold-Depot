<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminRegisteredUserController extends Controller
{
    public function index(){

        $user = User::all();

        return view('screens.admin.registered_user.registered-user', get_defined_vars());
    }
}
