<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|max:255',
            'company' => 'required|max:255',
            'model' => 'required|max:255',
            'description' => 'nullable',
            'condition' => 'nullable|max:255',
            'age' => 'nullable|numeric',
            'min_price' => 'required|numeric|min:0',
            'max_price' => 'required|numeric|min:0',
            'end_time' => 'required',
            'is_active' => 'boolean',
            'image' => 'nullable|image',
        ];
    }
}
