<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
                'nit' => "required|digits:9|unique:clients,nit,{$this->route('client')->id}",
                'name' => "required|max:200|min:3|unique:clients,name,{$this->route('client')->id}",
                'email' => "nullable|max:200|email|unique:clients,email,{$this->route('client')->id}",
                'contact' => "required|regex:/^\d{4}-\d{4}$/|unique:clients,contact,{$this->route('client')->id}",
                'location' => "required|max:200|min:3|unique:clients,location,{$this->route('client')->id}",
            ];

        } else {
            return [
                'nit' => 'required|digits:9|unique:clients,nit',
                'name' => 'required|max:200|min:3|unique:clients,name',
                'email' => 'nullable|max:200|email|unique:clients,email',
                'contact' => 'required|regex:/^\d{4}-\d{4}$/|unique:clients,contact',
                'location' => 'required|max:200|min:3',
            ];
        }

    }
}
