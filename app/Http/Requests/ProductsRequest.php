<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//lazem
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'name' => 'required|max:100|unique:products,name,'.$this->product_id,//rules:rule.table:column.exeption$this ->3shan y5ley fe edit 3la nafs el id
            'price' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Please add name',//el messeges elly htzhar
            'price.required' =>'Please add valid Price'
        ];
    }
}
