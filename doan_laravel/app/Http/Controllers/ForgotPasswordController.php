<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Mail\SendCodeEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AccountRequest;

class ForgotPasswordController extends Controller
{
    function formGetEmail(){
        return view('forgot-password.get-mail');
    }
    function sendMail(Request $req){
        $account=Account::where('email',$req->email)->first();
        if(empty($account)){
            return view('Email chưa được dùng để tạo tài khoản');
        }
        else{
            $code=Str::random(9);
            $account->code_password=$code;
            $account->save();
            Mail::to("$req->email")->send(new SendCodeEmail($req->email,$code));
            return view("forgot-password.get-code",["email"=>$req->email]);
        }

    }
    function sendCodeGet($email,$code){
        $account=Account::where('email',$email)->first();
        if(empty($account)){
            return 'Email chưa được dùng để tạo tài khoản';
        }
        else{
            if($code=='0'){
                return 'Bạn chưa thiết lập reset mật khẩu';
            }
            else if($account->code_password==$code){
                $message="";
                return view("forgot-password.change-password",compact("email","code","message"));
            }
        }
    }

    function formSendCodePost($email){
        return view("forgot-password.get-code",compact("email"));
    }

    function sendCodePost(Request $req){
        $account=Account::where('email',$req->email)->first();
        if(empty($account)){
            return 'Email chưa được dùng để tạo tài khoản';
        }
        else{
            if($account->code=='0'){
                return 'Bạn chưa thiết lập reset mật khẩu';
            }
            else if($account->code_password==$req->code){
                $email=$req->email;
                $code=$req->code;
                $message="";
                return view("forgot-password.change-password",compact("email","code","message"));
            }
            else{
                redirect()->route("index");
            }
        }
    }

    function formChangePasswordForgot($email,$code){
        $message="";
        return view("forgot-password.change-password",compact("email","code","message"));
    }
    function changePasswordForgot(Request $req){
        $account=Account::where('email',$req->email)->first();
        if($req->password1!=$req->password2){
            $email=$req->email;
            $code=$req->code;
            $message="Vui lòng nhập mật khẩu giống nhau";
            return view("forgot-password.change-password",compact("email","code","message")); 
        }
        if(empty($account)){
            return 'Email chưa được dùng để tạo tài khoản';
        }
        else{
            if($account->code=='0'){
                return 'Bạn chưa thiết lập reset mật khẩu';
            }
            else if($account->code_password==$req->code){
                
                $account->code_password='0';
                $account->password=Hash::make($req->password1);
                $account->save();
                Auth::logout();
                return redirect()->route("sign-in");
            }
        }
        dd($account->code_password,$req->code);
    }

}
