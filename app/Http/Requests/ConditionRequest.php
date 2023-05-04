<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConditionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'battery_power' => 'required',
            'blue' => 'required',
            'clock_speed' => 'required',
            'dual_sim' => 'required',
            'fc' => 'required',
            'four_g' => 'required',
            'int_memory' => 'nullable',
            'mobile_wt' => 'required',
            'n_cores' => 'required',
            'ram' => 'required',
            'sc_h' => 'required',
            'sc_w' => 'required',
            'talk_time' => 'required',
            'px_height' => 'required',
            'touch_screen' => 'required',
            'px_width' => 'required',
            'wifi' => 'required',
            'm_dep' => 'required',
            'pc' => 'required',
            'three_g' => 'required',
        ];
    }
}
