<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use App\Models\ClassroomStudent;
use App\Models\Classroom;
use App\Models\StudentWait;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isEmpty;

class StudentController extends Controller
{
    function index(){
        
        $accountInfo =Auth::user();
        $accountInfo->password = ""; 
        $classroom_student  =  ClassroomStudent::where('student_id',$accountInfo->id)->get();
        // $classroom_student= Account::find($accountInfo->id)->classrooms();
        $classrooms=[];
        $teachers = [];
        foreach($classroom_student as $ct){
    
            $classroom=Classroom::find($ct->classroom_id);
            $teacher=Account::find($classroom->teacher_id);
            array_push($classrooms,$classroom); 
            $teachers[$classroom->id] = $teacher;
        }     
      
   
        return view('student.index',["accountInfo"=>$accountInfo],compact('classrooms','teachers'));
    }
    
    function signOut(){
        Auth::logout();
        return redirect()->route('index');
    }

    function classrooms(){
      
        return view('student.index',compact('index'));
    }
    function formUpdateProfile(){
        return "";
    }
    function postUpdateProfile(){
        return "";
    }
    function formChangePassword(){
        return "";
    }
    function postChangePassword(){
        return "";
    }
    // function formJoinClassroom(){
    //     return "";
    // }
    function postJoinClassroom(Request $req){
        $user = Auth::user();
        $classroom=Classroom::where ("code","$req->malop")->first();
        if( $classroom!=null)
        {
     
          if(empty(StudentWait::where('student_id',Auth::user()->id)->where('classroom_id',$classroom->id)->first())){
            if(empty(ClassroomStudent::where('student_id',Auth::user()->id)->where('classroom_id',$classroom->id)->first()))
            {
                $addstudent=new StudentWait();
                $addstudent->student_id=$user->id;
                $addstudent->classroom_id= $classroom->id;
                $addstudent->save();
            }
            else{
                return redirect()->route('student')->with('jsAlert', 'Bạn đã tham gia lớp học này!');
            }
          }
          else
          {
            return redirect()->route('student')->with('jsAlert', 'Lớp học đang chờ xét duyệt');
          }
    
        }
        else{
            return redirect()->route('student')->with('jsAlert', 'Không tồn tại lớp học này!');
        }
      
     return redirect()->route('index');

    }
}
