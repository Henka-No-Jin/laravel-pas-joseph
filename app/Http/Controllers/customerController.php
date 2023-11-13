<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        return view('customer.all',[
            'title'=> 'Customer List',
            'customer'=> customer::all(),
        ]);
    }

    public function show($customer){
        return view('customer.detail',[
            'title'=> 'Customer Detail List',
            'customer'=> customer::find($customer),
        ]);
    }
}
