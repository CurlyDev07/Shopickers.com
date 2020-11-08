<?php

namespace App\Http\Requests\Orders;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'product'=> 'required',
            'price'=> 'required|integer',
            'quantity'=> 'required|integer',
            'total'=> 'required|integer',
            
            'sold_from'=> 'required|integer',
            'payment_method'=> 'required|integer',
        ];
    }
}
