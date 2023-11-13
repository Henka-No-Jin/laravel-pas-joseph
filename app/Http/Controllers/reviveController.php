<?php

namespace App\Http\Controllers;

use App\Models\revive;
use Illuminate\Http\Request;

class reviveController extends Controller
{
    public function index(){
        return view('revive.all',[
            'title'=> 'Revive List',
            'revive'=> revive::all(),
        ]);
    }

    public function show($revive){
        return view('revive.detail',[
            'title'=> 'Revive Detail List',
            'revive'=> revive::find($revive),
        ]);
    }
}
