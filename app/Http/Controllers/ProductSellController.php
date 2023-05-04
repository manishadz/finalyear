<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductSellController extends Controller
{
    public function condition()
    {


        return view('product-sell.condition');
    }

    public function conditionStore(Request $request)
    {
        dd($request->all());
        // we need to call pyrthon price here.
        
    }


    public function information()
    {
        return view('product-sell.information');
    }

    public function informatinStore(Request $request)
    {
        dd($request->all());
        // get condition of production from session and store conditon with product
    }
}

