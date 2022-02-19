<?php

namespace App\Http\Requests;

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
     * @return array
     */
    public function rules()
    {
        return [
            'first-name' => 'required|min:2|max:30',
            'surname' => 'required|min:2|max:30',
            'document-type' => 'required|min:2|max:30',
            'document' => 'required|min:2|max:30',
            'email' => 'required|email:rfc,dns|min:2|max:30',
            'mobile' => 'required|min:2|max:30',
        ];
    }
}
