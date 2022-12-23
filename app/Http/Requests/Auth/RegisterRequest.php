<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255'],
            'password' => ['required', 'confirmed','min:6'],
            'password_confirmation' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please enter your Name',
            'username.string' => 'Please enter valid name',
            'username.max' => 'Name can have maximum 255 characters',
            'email.unique' => 'This Email is already taken',
            'email.required' => 'Please enter email address',
            'email.email' => 'Please enter valid email address',
            'email.string' => 'Please enter valid email address',
            'email.max' => 'Email can have maximum 255 characters',
            'password.required' => 'Please enter password',
            'password.confirmed' => 'Password and confirm password should be equal',
            'password_confirmation.required' => 'Please enter password confirmation',
        ];
    }

    public function withValidator($validator)
    {
        if ($validator->fails()) {
            session()->flash('error', $validator->errors()->first());
        }
    }
}
