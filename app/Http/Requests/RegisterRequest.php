<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{   
    protected $stopOnFirstFailure = false;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function __construct() {
        foreach($_POST as $input => $value) {
            if($input != '_token') {
                $sanitized = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
                $_POST[$input] = $sanitized;
            }
        }
    }
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users|string',
            'password' => 'required|min:6|confirmed|string'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O campo email deve conter um email valído',
            'email.unique' => 'O email preenchido já está em uso',
            'password.required' => 'O compo senha é obrigatório',
            'password.min' => 'A senha deve conter no minímo 6 caracteres',
            'password.confirmed' => 'Senhas não conhicidem',
        ];
    }

    public function withValidator($validator) {
        return redirect()->route('register')
            ->withInput();
    }

    public function acceptsHtml() {
        return false;
    }
}
