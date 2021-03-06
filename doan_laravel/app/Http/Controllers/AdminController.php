<?php

namespace App\Http\Controllers;
use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Account;
use App\Models\Classroom;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class AdminController extends Controller
{
    public $accountInfo;
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
        $dsTeacher=Account::where("account_type_id",2)->get();
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
         $teacher->code_password = "ABCDEFGHIJKL";
        $image = $req->file('avatar');

        $ex=  $req->file('avatar')->extension();
        $file_name= $teacher->code.'.'.$ex;
        $storedPath = $image->storeAs('images/teachers/avatar', $file_name);
        $teacher->avatar=$file_name;
        $teacher->account_type_id =2;
        $teacher->save();
        return redirect()->route('admin-teachers');
    }
    function formUpdateTeacher($id){

        $teacher= Account::find($id);
        if($teacher==null){
            return "Kh??ng t??m th???y gi???ng vi??n c?? id= {$id}";
            //ve sau thi cho template c??? th???
        }

        return view('admin.update-teacher',compact('teacher'));
    }
    function postUpdateTeacher(AccountRequest $req){
      
        $teacher= Account::find($req->id);
 
        if($teacher==null){
            return "Kh??ng t??m th???y gi???ng vi??n c?? id= {$req->id}";
            //ve sau thi cho template c??? th???
        }
     
        if($req->hasFile('avatar')){
            $teacher->username = $req->username;  
            $teacher->name = $req->name;
            $teacher->email = $req->email;
            //avatar
            $image = $req->file('avatar');
            $ex=  $req->file('avatar')->extension();
            $file_name= $teacher->code.'.'.$ex;
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
            return "Kh??ng t??m th???y gi???ng vi??n c?? id= {$id}";
            //ve sau thi cho template c??? th???
        }
        if($teacher->account_type_id==2){
            $teacher->delete();
        }
        return redirect()->route('admin-teachers');
    }
    function resetPasswordTeacher($id){
        $teacher= Account::find($id);
        if($teacher==null){
            return "Kh??ng t??m th???y gi???ng vi??n c?? id= {$id}";
            //ve sau thi cho template c??? th???
        }
        if($teacher->account_type_id==2){
            $teacher->password=Hash::make('987654321');
            $teacher->save();
        }

        return redirect()->route('admin-teachers');
    }
    function formSendEmailTeacher($id){
        $teacher = Account::find($id);
        $email=$teacher->email;

        $accountInfo =Auth::user();
        $accountInfo->password = "";

        $dsTeacher=Account::where("account_type_id",2)->get();

        return view('email.write-email-to-teacher',compact('id','email','accountInfo','dsTeacher'));
    }
    function postSendEmailTeacher(Request $req){
        $subject=$req->subject;
        $title=$req->title;
        $body=$req->body;

        Mail::to("$req->email")->send(new SendEmail($subject,$title,$body));

        return "G???i th??nh c??ng $req->email";
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
        $student->code_password = "ABCDEFGHIJKL";
        $image = $req->file('avatar');
        $ex = $image->extension();
        $image_name = $student->code.'.'.$ex;
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
            return "Kh??ng t??m th???y sinh vi??n c?? id= {$id}";
            //ve sau thi cho template c??? th???
        }
        if($student->account_type_id==3){
            $student->delete();
        }
        return redirect()->route('admin-students');
    }
    function resetPasswordStudent($id){
        $student= Account::find($id);
        if($student==null){
            return "Kh??ng t??m th???y sinh c?? id= {$id}";
            //ve sau thi cho template c??? th???
        }
        if($student->account_type_id==3){
            $student->password=Hash::make('987654321');
            $student->save();
        }
        return redirect()->route('admin-students');
    }
    function formSendEmailStudent($id){
        $student = Account::find($id);
        $email=$student->email;

        $accountInfo =Auth::user();
        $accountInfo->password = "";

        $students=Account::where("account_type_id",3)->get();
        return view('email.write-email-to-student',compact('id','email','accountInfo','students'));
    }
    function postSendEmailStudent(Request $req){
        $subject=$req->subject;
        $title=$req->title;
        $body=$req->body;

        Mail::to("$req->email")->send(new SendEmail($subject,$title,$body));

        return "G???i th??nh c??ng $req->email";
    }


    //CLASSROOM
  
    function classrooms(){
        $accountInfo =Auth::user();
        $dsClassroom=Classroom::all();

        return  view('admin.classrooms',compact('dsClassroom','accountInfo'));
    }
    function detailClassroom($id){
        $classroom = Classroom::find($id);
    
        $infoTeacher=Account::find($classroom->teacher_id);
     
        return view('admin.detail-classroom',compact('classroom','infoTeacher'));
    }
    function formSendEmailClassroom($id){
        return '';
    }
    function postSendEmailClassroom(Request $req){
        return '';
    }


}
