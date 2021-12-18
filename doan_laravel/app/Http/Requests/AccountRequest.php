<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'username' => 'required|min:7|max:20|unique:account,username,'.$this->id,
            'password' => 'required|min:7|max:20',
            'avatar'   => 'mimes:jpg,jpeg,png,gif|max:2048',
            'email'    =>  'required|email|unique:account,email,'.$this->id,
            'name'     =>  'required'
        ];
    }
    public function messages(){
        return [
            'username.required'=>   "Chưa nhập tên đăng nhập",
            'username.min'     =>   "Tên đăng nhập phải lớn hơn 7 ký tự",
            'username.max'     =>   "Tên đăng nhập phải bé hơn 20 ký tự",
            'username.unique'  =>   "Tên đăng nhâp đã tồn tại",
            'password.required'=>   "Chưa nhập mật khẩu",
            'password.min'     =>   "Mật khẩu phải lớn hơn 7 ký tự",
            'password.max'     =>   "Mật khẩu phải bé hơn 20 ký tự",
            'avatar.mimes'     =>   "Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif",
            'avatar.max'       =>   "Hình thẻ giới hạn dung lượng không quá 2M",
            'email.required'   =>   "Chưa nhập địa chỉ email",
            'email.email'      =>   "Định dạng email chưa hợp lệ",
            'email.unique'     =>   "Email đã tồn tại",
            'name.required'    =>   "Chưa nhập họ và tên",
   
        ];
    }
}
