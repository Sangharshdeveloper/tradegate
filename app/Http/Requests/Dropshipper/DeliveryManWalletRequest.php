<?php

namespace App\Http\Requests\Dropshipper;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryManWalletRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'amount' => 'required|numeric|gt:0',
        ];
    }
}
