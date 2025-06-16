<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function create(){

        return view('screens.web.contact.index');
    }

    public function store(StoreContactUsRequest $request){

        ContactUs::create([

            'first_name'=>$request->first_name,
            'last_name'=> $request->last_name,
            'email' => $request->email,
            'phone_number'=> $request->phone_number,
            'message' => $request->message,
        ]);


        return redirect()->route('contact.create');
    }

}
