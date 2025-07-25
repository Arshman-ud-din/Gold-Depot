<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required',
            'email' => 'required',
            'phone_number' => 'required|min:11',
            'city' => 'required',
            'country' => 'required',
            'street_address' => 'required',
            'postal_code' => 'required',
            'state' => 'required',
        ];
    }
}
