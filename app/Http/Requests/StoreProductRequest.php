<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'title'=> 'required|string',
            'short_description'=> 'required|string',
            'long_description'=> 'required|string',
            'price'=> 'required|integer',
            'featured_img'=> 'required',
            'images'=> 'required',
            'quantity' => 'required'
        ];
    }
}
