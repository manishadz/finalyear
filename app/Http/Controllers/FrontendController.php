<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $products = Product::get();
        return view('index', compact('products'));
    }


    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product_detail', compact('product'));
    }
}
