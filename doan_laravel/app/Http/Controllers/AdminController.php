<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return "";
    }
    function formAddTeacher(){
        return "";
    }
    function postAddTeacher(){
        return "";
    }
    function formUpdateTeacher($id){
        return "";
    }
    function postUpdateTeacher(Request $req){
        return "";
    }
    function deleteTeacher($id){
        return "";
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
