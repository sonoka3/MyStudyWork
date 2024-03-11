<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWebServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //return false;
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
            'lineup' => 'required|string|max:40|no_space',
            'description' => 'required|string|max:255|no_space',
            'price' => 'required|string|no_space',
            'image' => 'required|file|image|mimes:jpeg,jpg,png|max:5120',
        ];
    }
}
