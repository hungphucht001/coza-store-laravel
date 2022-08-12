<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'name'=> 'required',
            'parent_id'=>'required',
            'active'=>'required',
            'description'=>'required',
            'content'=>'required'
        ];
    }
    public function messages():array
    {
        return [
            'name.required'=> 'Name cannot be blank',
            'parent_id.required'=> 'parent_id cannot be blank',
            'active.required'=> 'status cannot be blank',
            'description.required'=> 'description cannot be blank',
            'content.required'=> 'content cannot be blank',
        ];
    }
}
