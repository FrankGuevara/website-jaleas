<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'name'=>'required|min:5',
            'email'=>'email|required',
            'message'=>'required'
        ];
    }

    public function messages() {
        return [
            'name.required'=>'El campo es obligatorio.',
            'name.min'=>'El campo debe tener minimo 5 caracteres.',
            'email.required'=>'El campo es obligatorio.',
            'email.email'=>'El campo  debe tener formato de correo.',
            'message.required'=>'El campo es obligatorio.',
            
        ];
        
    }
}
