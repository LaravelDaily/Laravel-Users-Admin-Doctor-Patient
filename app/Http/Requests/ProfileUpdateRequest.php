<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'string', 'max:255', Rule::unique('users')->ignore(Auth::user())],
            'password' => ['sometimes', 'required_with:old_password', 'string', 'confirmed', 'min:8'],
        ];
    }

    /**
     * @return array
     * can create custom message in stead of the the build in message
     */
    public function message()
    {
        return [
            'name.required' => "Name is required and cannot be more than 255 character",
            'emai.required' =>"Email is required and should be unique",

        ];
    }

    public function authorize()
    {
        return true;
    }

    protected function prepareForValidation()
    {
        if ($this->password == null) {
            $this->request->remove('password');
        }
    }
}
