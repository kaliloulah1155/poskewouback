<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
     

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'login'=>'required',
            'password'=>'required|string|min:6',
        ];
    }

    public function messages()
    {  
        return[
            'login.required' => 'Le champ login est requis.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password.min' => "Le champ du mot de passe doit contenir au moins 6 caractères."
        ];
    }
}
