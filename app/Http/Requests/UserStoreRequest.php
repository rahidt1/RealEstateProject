<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:4|max:50',
            'phone' => 'required|numeric|unique:users,phone|string:15',
            'address' => 'required',
            'date_of_birth' => 'required|date',
        ];
    }
    public function messages(){
        return [
            /*User*/
            'name.required'=> 'Name is required!',
            'email.required'=> 'Email is required!',
            'username.required'=> 'Username is required!',
            'password.required'=> 'Password is required!',
            'phone.required'=> 'Phone is required!',
            'address.required'=> 'Address is required!',
            'date_of_address.required'=> 'Date Of Birth is required!',
        ];
    }
}
