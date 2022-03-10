<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => 'required',
            'email' =>'required|email',
            'password'=>'required|min:3|max123',
            'confirm_password'=> 'required|same:password',
            'role_id'=>'required|min1|max2'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'email.required' => 'Tên không được bỏ trống',
            'password.required' => 'Tên không được bỏ trống',
            'role_id.required' => 'Tên không được bỏ trống',

        ];

    }
}
