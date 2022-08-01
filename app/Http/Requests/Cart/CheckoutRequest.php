<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'user_name' => 'required',
            'user_mail' => 'required',
            'user_phone' => 'required',
            'user_postcode' => 'required',
            'user_locality' => 'required',
            'delivery_address' => 'required',
            'user_id' => '',
            'products' => '',
            'status' => '',
        ];
    }
}
