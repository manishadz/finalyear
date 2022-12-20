<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {

        $products = Product::whereNot('user_id', auth()->id())->get();
        return view('index', compact('products'));
    }


    public function detail($id)
    {
        $product = Product::with(['users' => function($query){
            $query->orderBy('bidding_amount', 'desc');
        }])->withCount('users')->findOrFail($id);
        // dd($product);
        return view('product_detail', compact('product'));

    }
}
