<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Account;
use App\Models\ClassroomStudent;
use App\Models\Classroom;


class StudentController extends Controller
{
    function index(){
        
        $accountInfo =Auth::user();
        $accountInfo->password = ""; 
         $classrooms=Auth::user()->classrooms;
        
        return view('student.index',["accountInfo"=>$accountInfo],compact('classrooms'));
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


    function formJoinClassroom(){
        return "";
    }
    function postJoinClassroom(Request $req){
        $user = Auth::user();
        $students=Classroom::where ("code","$req->malop")->first();
        $addstudent=new ClassroomStudent(); 
        $addstudent->student_id=$user->id;
        $addstudent->classroom_id=$students->id;
        $addstudent->save();
        return redirect()->route('index');

    }
}
