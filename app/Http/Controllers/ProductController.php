<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['users' => function($query){
            $query->orderBy('bidding_amount', 'desc');
        }])->where('user_id',auth()->id())->get();
        // dd($products);

        return view('product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * Curl use gar 
         */

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => '%7B%7Burl%7D%7D/category-wise-news',
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
        //$response = json_decode($response);

        /**
         * eg : 
         * $response = main_key => [
         * 'x'=> 12.56,
         * 'y' => 1542.l
         * 'z' => [{xyz : 1},{abc : 1}]
         * ]
         * 
         */
        // return view('product.create')->with(['data' => $response]);

        /**
         * in blade view : 
         * {{$data['x']}} ==> 12.56
         * {{$data['z']}} ==> [{xyz : 1},{abc : 1}]
         */
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product =new Product();
        //  dd($request);
        $product->name =$request->input('name');
        $product->category =$request->input('category');
        $product->description =$request->input('description');
        $product->min_price =$request->input('min_price');
        $product->max_price =$request->input('max_price');
        $product->end_time =$request->input('end_time');
        $product->user_id = auth()->id();

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }
        else{
            return $request;
            $product->image = '';
        }

        $product->save();
        session()->flash('success', 'Product added successfully');
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
        return view('product.edit',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {
        $product = product::find($id);
        // dd($request->all());

        $product->name =$request->input('name');
        $product->category =$request->input('category');
        $product->description =$request->input('description');
        $product->min_price =$request->input('min_price');
        $product->max_price =$request->input('max_price');
        $product->end_time =$request->input('end_time');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }

        $product->save();
        session()->flash('success', 'Product edited successfully');
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
        $product->delete();
        session()->flash('success', 'Product Deleted successfully');
        return redirect()->route('products.index');
      }


    }


