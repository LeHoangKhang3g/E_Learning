<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

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
        $accountInfo =Auth::user();
        $accountInfo->password="********";
        $dsClassroom=Classroom::where('teacher_id',$accountInfo->id)->get();
    
        return  view('teacher.classrooms',compact('dsClassroom','accountInfo'));
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

    return view('teacher.add-classroom',compact('code'));

    }
    function postAddClassroom(Request $request){
        $classroom =new Classroom;
        $classroom->teacher_id=Auth::user()->id;
        $classroom->class_name=$request->class_name;
        $classroom->code=$request->code;
        $classroom->content=$request->content;
        $classroom->point_table=$request->point_table;

        $image=$request->file('background');
        $ex=$request->file('background')->extension();
        $file_name=$classroom->code.'.'.$ex;
        $path = $image->storeAs('images/classrooms/background',$file_name);
        $classroom->background=$file_name;
        $classroom->save();


        return redirect()->route ('teacher-classrooms');
    }
    function formUpdateClassroom($id){

        $classroom= Classroom::find($id);
        if($classroom==null){
            return "Không tìm thấy lớp  có id= {$id}";
            //ve sau thi cho template cụ thể
        }

        return view('teacher.update-classroom',compact('classroom'));
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
            $file_name= $classroom->code.'.'.$ex;
            $storedPath = $image->storeAs('images/classrooms/background', $file_name);
            $classroom->background=$file_name;
            $classroom->save();
        }else{
            $classroom->class_name = $request->class_name;  
            $classroom->content = $request->content;
            
            $classroom->save();          
        }
      
        return redirect()->route('teacher-classrooms');
    }
    function deleteClassroom($id){
        $classroom = Classroom::find($id);

        if($classroom==null){
            return "Không tìm thấy sinh viên có id= {$id}";
            //ve sau thi cho template cụ thể
        }
        $classroom->delete();
        return redirect()->route('teacher-classrooms');
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
