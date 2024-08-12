<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pizza;
class pizzaController extends Controller
{
    //
    function show(){
        $data= pizza::all();
        return view('Dashboard', ['Pizzas'=>$data]);
    }
}
