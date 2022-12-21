<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function password()
    {
        return view('change-password');
    }

    // to change password
    public function changePassword(Request $request)
    {

        # Validation
        $request->validate([
            'password' => ['required', 'string', 'min:9', 'confirmed'],
        ]);


        if (!Hash::check($request->current_password, $request->user()->password)) {
            return back()->withErrors([
                'current_password' => ['The provided password does not match our records.']
            ]);
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
        Auth::logout();
        // return redirect()->url('/');

        return redirect()->route("index")->with("status", "Password changed successfully!");
}


}
