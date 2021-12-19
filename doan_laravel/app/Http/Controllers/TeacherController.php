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
    function postAddClassroom(Request $request){
        $hi =new Classroom;
        $hi->teacher_id=1;
        $hi->class_name=$request->username;
        $hi->code=$request->code;
        $hi->content=$request->noidung;
        $hi->point_table=$request->name;

        $image=$request->file('avatar');
        $duoi=$request->file('avatar')->extension();
        $file_name=$hi.'.'.$duoi;
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
