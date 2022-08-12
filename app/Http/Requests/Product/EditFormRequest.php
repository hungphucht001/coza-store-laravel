<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class EditFormRequest extends FormRequest
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
            'name'=>'required',
            'price' => 'required|integer',
            'price_sale'=>'required|integer',
            'description'=>'required',
            'active'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name khong bo trong',
            'price.required' => 'price khong bo trong',
            'price_sale.required' => 'price_sale khong bo trong',
            'description.required' => 'description khong bo trong',
            'active.required' => 'active khong bo trong',
        ];
    }
}
