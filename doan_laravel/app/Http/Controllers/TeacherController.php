<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index(){
        $accountInfo =Auth::user();
        $accountInfo->password = "";
        return view('teacher.index',["accountInfo"=>$accountInfo]);
    }
    
    function signOut(){
       Auth::logout();
        return redirect()->route('index');
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



    function classrooms(){
        return "";
    }
    function formAddClassroom(){
        return "";
    }
    function postAddClassroom(){
        return "";
    }
    function formUpdateClassroom($id){
        return "";
    }
    function postUpdateClassroom(Request $req){
        return "";
    }
    function deleteClassroom($id){
        return "";
    }
    function studentsWait($id){
        return "";
    }
    function addStudentsWait($classroom_id,$student_wait_id){
        return "";
    }
    function removeStudentsWait($classroom_id,$student_wait_id){
        return "";
    }


}
