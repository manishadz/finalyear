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
        $data = [];
        $data['data']['battery_power'] = (int) $request->battery_power;
        $data['data']['blue'] = (int) $request->blue;
        $data['data']['clock_speed'] = (int)$request->clock_speed;
        $data['data']['dual_sim'] = (int)$request->dual_sim;
        $data['data']['fc'] = (int)$request->fc;
        $data['data']['four_g'] = (int)$request->four_g;
        $data['data']['int_memory'] = (int)$request->int_memory;
        $data['data']['mobile_wt'] = (int)$request->mobile_wt;
        $data['data']['n_cores'] = (int)$request->n_cores;
        $data['data']['ram'] = (int)$request->ram;
        $data['data']['sc_h'] = (int)$request->sc_h;
        $data['data']['sc_w'] = (int)$request->sc_w;
        $data['data']['talk_time'] = (int)$request->talk_time;
        $data['data']['px_height'] = (int)$request->px_height;
        $data['data']['touch_screen'] = (int)$request->touch_screen;
        $data['data']['px_width'] = (int)$request->px_width;
        $data['data']['wifi'] = (int)$request->wifi;
        $data['data']['m_dep'] = (int)$request->m_dep;
        $data['data']['pc'] = (int)$request->pc;
        $data['data']['three_g'] = (int)$request->three_g;




        $jsondata = json_decode(json_encode($data));


        $response = Http::post(
            'http://127.0.0.1:9000/predict',
            $data


        );
        // dd($data);

        // return back()->with(["prediction"=>($response->body())]);
        $prediction = json_decode($response->getBody())->prediction;
        // dd($prediction[0]);
        return back()->with(["prediction" => $prediction[0]]);




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
