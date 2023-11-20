<?php

namespace App\Http\Controllers;

use App\Models\customer_queue;
use Illuminate\Http\Request;

class customerQueueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('customer_queue.all',[
            'title'=> 'Customer Queue List',
            'customer_queue'=> customer_queue::all(),
        ]);
    }

    public function show($customer_queue){
        return view('customer.detail',[
            'title'=> 'Customer Detail List',
            'customer'=> customer_queue::find($customer_queue),
        ]);
    }
}
