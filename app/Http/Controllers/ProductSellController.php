<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductSellController extends Controller
{
    public function predict()
    {


        return view('product-sell.predict');
    }

    public function predictStore(Request $request)
    {
        dd($request->all());
        // we need to call pyrthon price here.
        
    }
    public function information()
    {

        return view('product-sell.information');
    }

}

