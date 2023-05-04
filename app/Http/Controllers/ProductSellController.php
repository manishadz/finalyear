<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConditionRequest;
use App\Models\Product;
use App\Models\ProductCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ProductSellController extends Controller
{

    public function condition()
    {




        return view('product-sell.condition');
    }

    public function conditionStore(ConditionRequest $request)
    {

        // $data = [];
        // $data['data']['battery_power'] = $request->battery_power;
        // $data['data']['blue'] = $request->blue;
        // $data['data']['clock_speed'] = $request->clock_speed;
        // $data['data']['dual_sim'] = $request->dual_sim;
        // $data['data']['fc'] = $request->fc;
        // $data['data']['four_g'] = $request->four_g;
        // $data['data']['int_memory'] = $request->int_memory;
        // $data['data']['mobile_wt'] = $request->mobile_wt;
        // $data['data']['n_cores'] = $request->n_cores;
        // $data['data']['ram'] = $request->ram;
        // $data['data']['sc_h'] = $request->sc_h;
        // $data['data']['sc_w'] = $request->sc_w;
        // $data['data']['talk_time'] = $request->talk_time;
        // $data['data']['px_height'] = $request->px_height;
        // $data['data']['touch_screen'] = $request->touch_screen;
        // $data['data']['px_width'] = $request->px_width;
        // $data['data']['wifi'] = $request->wifi;
        // $data['data']['m_dep'] = $request->m_dep;
        // $data['data']['pc'] = $request->pc;
        // $data['data']['three_g'] = $request->three_g;
        // $data['data']['product_id'] = $request->product_id;

        // $jsondata = json_encode($data);


        // $response = Http::post(
        //     'http://127.0.0.1:9000/predict',
        //     $jsondata

        // );
        // Log::info(print_r($response));
        // dd($response);

        $data = $request->validated();
        session()->put('__condition', $data);
        return to_route('product-sell.information');
    }



    public function information()
    {
        return view('product-sell.information');
    }

    public function informationStore(Request $request)
    {
        // get product information from form 
        $data = $request->all();
        $data['user_id'] = auth()->id();

        $product = Product::create($data);
        // get condition of product from session
        if ($product && session('__condition')) {
            $condition = session('__condition');
            $condition['product_id'] = $product->id;
            $product->condition()->create($condition);
        }
        session()->flash('success', 'product added successfully');
        return to_route('products.index');
    }
}
