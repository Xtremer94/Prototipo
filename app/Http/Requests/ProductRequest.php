<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

        if ($this->isMethod('PUT')) {
            // dd($this->route('client')->id);
            return [
                'name' => "required|max:200|min:3|unique:products,name,{$this->route('product')->id}",
                'stock' => 'required|integer|min:0',
                'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{2})?$/',
            ];

        } else {
            return [
                'name' => "required|max:200|min:3|unique:products,name",
                'stock' => 'required|integer|min:0',
                'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{2})?$/',
            ];
        }
    }
}
