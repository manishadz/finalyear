<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {

        return view('home');
    }


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
