<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->id() == 1) {
            $products = Product::with(['users' => function ($query) {
                $query->orderBy('bidding_amount', 'desc');
            }])->get();
        } else {
            $products = Product::with(['users' => function ($query) {
                $query->orderBy('bidding_amount', 'desc');
            }])->where('user_id', auth()->id())->get();
        }

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function create()
    {
        // $endpoint = 'http://127.0.0.1:9000/myapi';


        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => $endpoint,
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'GET',
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // $response = json_decode($response);

        return view('product.create');
    }


   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->id();

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product/', $filename);
            $validated['image'] = $filename;
        }

        $success = Product::create($validated);
        if ($success) {
            session()->flash('success', 'new product added successfully');
        } else {
            session()->flash('error', 'something went wrong.');
        }

        return redirect()->route('products.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)

    {
        $product = product::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product/', $filename);
            $validated['image'] = $filename;
        }

        $success = $product->update($validated);
        if ($success) {
            session()->flash('success', 'product information updated successfully');
        } else {
            session()->flash('error', 'something went wrong.');
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $success = $product->delete();

        if ($success) {
            session()->flash('success', 'product deleted successfully');
        } else {
            session()->flash('error', 'something went wrong.');
        }

        return redirect()->route('products.index');
    }

    /**
     * toggle is_active value of the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $product = Product::find($id);
        $product->is_active = !$product->is_active;
        $success = $product->save();

        if ($success) {
            session()->flash('success', 'product status changed');
        } else {
            session()->flash('error', 'something went wrong.');
        }

        return redirect()->route('products.index');
    }
}
