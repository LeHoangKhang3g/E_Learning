<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignInRequest extends FormRequest
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
            'username' => 'required|min:7|max:20',
            'password' => 'required|min:1|max:20',
        ];
    }
    public function messages(){
        return [
            'username.required'=>   "Chưa nhập tên đăng nhập",   
            'username.min'     =>   "Tên đăng nhập phải lớn hơn 7 ký tự",
            'username.max'     =>   "Tên đăng nhập phải bé hơn 20 ký tự",
            
            'password.required'=>   "Chưa nhập mật khẩu",   
            'password.min'     =>   "Mật khẩu nhập phải lớn hơn 1 ký tự",
            'password.max'     =>   "Mật khẩu nhập phải bé hơn 20 ký tự",
     
        ];
    }
}
