<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Teacher;
use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Account;
use App\Models\Classroom;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;


use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    function index(){

        $accountInfo =Auth::user();
        $accountInfo->password = "";
    
        return view('admin.index',['accountInfo' => $accountInfo]);
    }

    function signOut(){
        Auth::logout();
        return redirect()->route('index');
    }


    //TEACHER
    function teachers(){
        $accountInfo =Auth::user();
        $accountInfo->password = "";
        $dsTeacher=Account::all()->where("account_type_id",2);
        return view('admin.teachers',compact('dsTeacher','accountInfo'));
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
    function postAddTeacher(AccountRequest $req){  
        $teacher = new Account;
        $teacher->code = $req->code;
        $teacher->username = $req->username;
        $teacher->password =Hash::make($req->password);
        $teacher->name = $req->name;
        $teacher->email = $req->email;
      
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
    function postUpdateTeacher(AccountRequest $req){
      
        $teacher= Account::find($req->id);
 
        if($teacher==null){
            return "Không tìm thấy giảng viên có id= {$req->id}";
            //ve sau thi cho template cụ thể
        }
     
        if($req->hasFile('avatar')){
            $teacher->username = $req->username;  
            $teacher->name = $req->name;
            $teacher->email = $req->email;
            //avatar
            $image = $req->file('avatar');
            $ex=  $req->file('avatar')->extension();
            $file_name= time() . '.'.$ex;
            $storedPath = $image->storeAs('images/teachers/avatar', $file_name);
            $teacher->avatar=$file_name;
            $teacher->save();
        }else{
            $teacher->username = $req->username;
         
            $teacher->name = $req->name;
            $teacher->email = $req->email;
            $teacher->save();          
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
        
        $accountInfo =Auth::user();
        $accountInfo->password = "";
    
        $students=Account::all()->where("account_type_id",3);
        return view("admin.students",["students"=>$students,"accountInfo"=>$accountInfo]);
    }
    function formAddStudent(){
        $code = 'ST'.Str::random(10);
        $code = strtoupper($code);
        while(!isEmpty(Account::where('code',$code))){
            $code = 'ST'.Str::random(10);
            $code = strtoupper($code);
        }
        return view('admin.add-student',["code"=>$code]);
    }
    function postAddStudent(AccountRequest $req){
        $student = new Account();
        $student->code = $req->code;
        $student->username = $req->username;
        $student->password = Hash::make($req->password);
        $student->name = $req->name;
        $student->email = $req->email;

        $image = $req->file('avatar');
        $ex = $image->extension();
        $image_name = $req->code.'.'.$ex;
        $image_path = $image->storeAs('images/students/avatar',$image_name);
        $student->avatar = $image_name;
        $student->account_type_id=3;
        $student->save();
        return redirect()->route('admin-students');
    }
    function formUpdateStudent($id){
        $student=Account::find($id);
        return view('admin.update-student',compact('student'));
    }
    function postUpdateStudent(AccountRequest $req){
        $student = Account::find($req->id);

        if($req->hasFile('avatar')){
            $student->username = $req->username;
     
            $student->name = $req->name;
            $student->email = $req->email;
            
            $image = $req->file('avatar');
            $ex=  $req->file('avatar')->extension();
            $image_name= $student->code.'.'.$ex;
            $image_path = $image->storeAs('images/students/avatar', $image_name);
            $student->avatar=$image_name;
            $student->save();
        }else{
            $student->username = $req->username;
            $student->name = $req->name;
            $student->email = $req->email;
            $student->save();          
        }
        return redirect()->route('admin-students');
    }
    function deleteStudent($id){
        $student = Account::find($id);

        if($student==null){
            return "Không tìm thấy sinh viên có id= {$id}";
            //ve sau thi cho template cụ thể
        }
        $student->delete();
        return redirect()->route('admin-students');
    }
    function resetPasswordStudent($id){
        return "";
    }
    function sendEmailStudent($id){
        return "";
    }


    //CLASSROOM
  
    function classrooms(){
        $accountInfo =Auth::user();
        $dsClassroom=Classroom::all();
    
        return  view('admin.classrooms',compact('dsClassroom','accountInfo'));
    }
  

    function addclassroom(){
        $code='';
        while(true){
            $code='CR'.Str::random(10);
            $code=strtoupper($code);
            $classroom = Classroom::where('code', $code);
            if(isEmpty($classroom)){
                break;
            }
        }

    return view('admin.add-classroom',compact('code'));

    }
    function formUpAddClassroom(Request $request){
        $hi =new Classroom;
        $hi->teacher_id=1;
        $hi->class_name=$request->username;
        $hi->code=$request->code;
        $hi->content=$request->noidung;
        $hi->point_table=$request->name;

        $image=$request->file('avatar');
        $duoi=$request->file('avatar')->extension();
        $file_name=time().'.'.$duoi;
        $path = $image->storeAs('images',$file_name);
        $hi->background=$file_name;
        $hi->save();


        return redirect()->route ('admin-classrooms');
    }
    function formUpdateClassroom($id){

        $classroom= Classroom::find($id);
        if($classroom==null){
            return "Không tìm thấy lớp  có id= {$id}";
            //ve sau thi cho template cụ thể
        }

        return view('admin.update-classroom',compact('classroom'));
    }
    function postUpdateClassroom(Request $request){
      
        $classroom= Classroom::find($request->id);
 
        if($classroom==null){
            return "Không tìm thấy lớp có id= {$request->id}";
            //ve sau thi cho template cụ thể
        }
     
        if($request->hasFile('avatar')){
            $classroom->class_name = $request->class_name;  
            $classroom->content = $request->content;
            
            //avatar
            $image = $request->file('avatar');
            $ex=  $request->file('avatar')->extension();
            $file_name= time() . '.'.$ex;
            $storedPath = $image->storeAs('images', $file_name);
            $classroom->background=$file_name;
            $classroom->save();
        }else{
            $classroom->class_name = $request->class_name;  
            $classroom->content = $request->content;
            
            $classroom->save();          
        }
      
        return redirect()->route('admin-classrooms');
    }
    function deleteClassroom($id){
        $classroom = Classroom::find($id);

        if($classroom==null){
            return "Không tìm thấy sinh viên có id= {$id}";
            //ve sau thi cho template cụ thể
        }
        $classroom->delete();
        return redirect()->route('admin-classrooms');
    }

}
