<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Registro extends FormRequest
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
          'name' => 'required|max:255',
          'lastname' => 'required|max:255',
          'email' => 'required|email|max:255|unique:users',
          'username' => 'required|max:100',
          'password' => 'required|min:6',
          'password-confirm' => 'required|min:6|same:password',
          'birth' => 'required|date|before:1998-01-01',
          'avatar' => 'image|mimes:jpeg,bmp,png|max:512'
        ];
    }
}
