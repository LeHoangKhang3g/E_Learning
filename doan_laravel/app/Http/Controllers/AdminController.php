<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function signOut(){
        Auth::logout();
        return redirect()->route('index');
    }


    //TEACHER
    function teachers(){
        $dsTeacher=Account::all();
        return view('admin.teachers',compact('dsTeacher'));
    }
    function formAddTeacher(){
        $code='';
        while(true){
            $code='GV'.Str::random(10);
            $code=strtoupper($code);
            $account = Account::where('code', $code);
            if(isEmpty($account)){
                break;
            }
        }


        return view('admin.add-teacher',compact('code'));
    }
    function postAddTeacher(Request $req){
      
        $teacher = new Account;
        $teacher->code = $req->code;
        $teacher->username = $req->username;
        $teacher->password =Hash::make($req->password);
        $teacher->name = $req->name;
        $teacher->email = $req->email;
        $this->validate($req, 
			[
				'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
			],			
			[
				'avatar.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
				'avatar.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
			]
		);
        $image = $req->file('avatar');
        $ex=  $req->file('avatar')->extension();
        $file_name= time() . '.'.$ex;
        $storedPath = $image->storeAs('images/avatar', $file_name);
        $teacher->avatar=$file_name;
        $teacher->account_type_id =2;
        $teacher->save();
        return redirect()->route('admin-teachers');
    }
    function formUpdateTeacher($id){

        $teacher= Account::find($id);
        if($teacher==null){
            return "Không tìm thấy giảng viên có id= {$id}";
            //ve sau thi cho template cụ thể
        }

        return view('admin.update-teacher',compact('teacher'));
    }
    function postUpdateTeacher(Request $req, $id){
        $teacher= Account::find($id);
        if($teacher==null){
            return "Không tìm thấy giảng viên có id= {$id}";
            //ve sau thi cho template cụ thể
        }
        if($req->hasFile('avatar')){
            $teacher->code = $req->code;
            $teacher->username = $req->username;
            $teacher->password =Hash::make($req->password);
            $teacher->name = $req->name;
            $teacher->email = $req->email;
            //avatar
            $image = $req->file('avatar');
            $ex=  $req->file('avatar')->extension();
            $file_name= time() . '.'.$ex;
            $storedPath = $image->storeAs('images/avatar', $file_name);
            $teacher->avatar=$file_name;
            $teacher->save();
        }else{
            $image = $req->file('avatar');
            
        }
      
      
        return redirect()->route('admin-teachers');
    }
    function deleteTeacher($id){
        $teacher= Account::find($id);
        if($teacher==null){
            return "Không tìm thấy giảng viên có id= {$id}";
            //ve sau thi cho template cụ thể
        }
        $teacher->delete();
        return redirect()->route('admin-teachers');
    }
    function resetPasswordTeacher($id){
        return "";
    }
    function sendEmailTeacher($id){
        return "";
    }



    //STUDENT
    function students(){
        return "";
    }
    function formAddStudent(){
        return "";
    }
    function postAddStudent(){
        return "";
    }
    function formUpdateStudent($id){
        return "";
    }
    function postUpdateStudent(Request $req){
        return "";
    }
    function deleteStudent($id){
        return "";
    }
    function resetPasswordStudent($id){
        return "";
    }
    function sendEmailStudent($id){
        return "";
    }


    //CLASSROOM
    function classrooms(){
        return "";
    }
    function detailClassroom($id){
        return "";
    }
    function sendEmailClassroom($id){
        return "";
    }

}
