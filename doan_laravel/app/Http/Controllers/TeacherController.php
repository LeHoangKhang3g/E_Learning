<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Student;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classroom;
use App\Models\ClassroomStudent;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostType;
use App\Models\StudentWait;
use App\Models\User;
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
        $students = StudentWait::where('classroom_id',$id)->get();
        $classrooms=Classroom::find($id);
        $infoStudent=[];
        $accounts=Account::all();
        foreach($accounts as $ac)
        {
            foreach($students as $sd)
            {
               
                if($ac->id==$sd->student_id)
                {
                    $infoStudent[]  = Account::where('id',$sd->student_id)->first();
                }
            }
              
        }
        return view('teacher.student-wait',compact('infoStudent','classrooms'));
    }
    function removeStudent($classroom_id,$student_id){
        $student = ClassroomStudent::where('classroom_id',$classroom_id)
        ->where('student_id',$student_id)->first();
        $student->delete();
        // return back()->with('jsAlert', 'Xóa thành công!');
        return back();
        // return redirect()->route('teacher-classrooms');
    }
    function studentsList($id){
        $students = ClassroomStudent::where('classroom_id',$id)->get();
        $classrooms=Classroom::find($id);
        $infoStudents=[];
        $accounts=Account::all();
        foreach($accounts as $ac)
        {
            foreach($students as $sd)
            {
               
                if($ac->id==$sd->student_id)
                {
                    $infoStudents[]  = Account::where('id',$sd->student_id)->first();
                }
            }
              
        }
        return view('teacher.student-list',compact('infoStudents','classrooms'));
    }
    function addStudentsWait($classroom_id,$student_wait_id){
         $student = StudentWait::where('classroom_id',$classroom_id)
         ->where('student_id',$student_wait_id)->first();
         $student->delete();
         $addStudentClassroom = new ClassroomStudent;
        $addStudentClassroom->classroom_id =$classroom_id;
        $addStudentClassroom->student_id=$student_wait_id;
        
        $addStudentClassroom->save();
      
        
        return back();

    }
    function removeStudentsWait($classroom_id,$student_wait_id){
        $student = StudentWait::where('classroom_id',$classroom_id)
        ->where('student_id',$student_wait_id)->first();
        $student->delete();
        return back();
        // return redirect()->route('teacher-classrooms');
    }
    function addStudents(Request $req,$classroom_id){

        $dsEmail=explode(";", $req->add_students);
        foreach($dsEmail as $email)
        {
            $student=Account::where("email","$email")->first();
            if(empty($student))
            {
            return back()->with('error',"Email $email này không hợp lệ");   
            }
            $hc= ClassroomStudent::where('classroom_id',$classroom_id)->where('student_id',$student->id)->first();
            if($hc)
            {
                return back()->with('error',"Email $email đã có trong lớp mời bạn kiểm tra lại nhé");  
            }
            if($student->account_type_id==2){
        
                return back()->with('error',"Email $email này là của giáo viên mời bạn kiểm tra lại nhé");   
            }
            elseif($student->account_type_id==1)
            {
                return back()->with('error',"Email $email này là của Admin mời bạn kiểm tra lại nhé");   
            }
        }
        $count=0;
        foreach($dsEmail as $email)
        {
            $student=Account::where("email","$email")->first();
            $sdw= StudentWait::where('classroom_id',$classroom_id)->where('student_id',$student->id)->first();
            if($sdw)
            {
                $sdw->delete();
                $add=new ClassroomStudent();
                $add->classroom_id=$classroom_id;
                $add->student_id=$student->id;
                $add->save();
                $count++;
            }
            else{
                $add=new  ClassroomStudent();
                $add->classroom_id=$classroom_id;
                $add->student_id=$student->id;
                $add->save();
                $count++;
            }
        }
         return back()->with('success',"Bạn đã thêm thành công $count sinh viên");
    }

   function classroomsOptions($id) {
   
    $students = ClassroomStudent::where('classroom_id',$id)->get();
    $classrooms=Classroom::find($id);
    $infoStudent=[];
    $accounts=Account::all();
    foreach($accounts as $ac)
    {
        foreach($students as $sd)
        {
           
            if($ac->id==$sd->student_id)
            {
                $infoStudent[]  = Account::where('id',$sd->student_id)->first();
            }
        }
          
    }
    //studentwait
    $studentsWait = StudentWait::where('classroom_id',$id)->get();
    $classrooms=Classroom::find($id);
    $infoStudentWait=[];
    $accounts=Account::all();
    foreach($accounts as $ac)
    {
        foreach($studentsWait as $sd)
        {
           
            if($ac->id==$sd->student_id)
            {
                $infoStudentWait[]  = Account::where('id',$sd->student_id)->first();
            }
        }
          
    }
        $classroom=Classroom::find($id);

        //danh sach post type 
        $dsPostType=PostType::all();
        // return view('teacher.controll-post-type',compact('dsPostType'));
$posts= Post::where('class_id',$id)->get();
// add news 
//danh sach posts
$getUserForComment = Account::all();
$getAllComments = Comment::all();
// $comment=[];
$infoAccount=[];
foreach($getUserForComment as $getU){
    foreach($getAllComments as $getC){
        if($getU->id==$getC->account_id){
            $infoAccount[]=Account::where('id',$getU->id)->first();
            // $comment[]=Post::where('id',$getC->post_id)->first();
        }
    }
   
}

        return view('teacher.tab-controll',compact('classroom','classrooms','infoStudent','infoStudentWait','dsPostType'
        ,'posts','infoAccount'));
    }
    function detailNewExercise($post_id) {
        $postId = Post::find($post_id);
     
        return view('teacher.detail-news',compact('postId'));
    }
  
    function addPostType(Request $req)
    {
        $addPostType= new PostType;
        $addPostType -> name= $req->name;
        $addPostType->save();
        return back();
    }
    function addPostNews(Request $req,$classroom_id){
            $addNews = new Post;
            $addNews->class_id = $classroom_id;
            $addNews->title = $req->title;
            $addNews->content = $req->content;
             $addNews->post_type_id=$req->post_type;
            if($req->deadline!=null){
                $addNews->deadline = $req->deadline;
                $addNews->have_deadline=1;
            }
            $addNews->save();
            return back();

    }

        function comments(Request $req,$post_id){
            $addComment = new Comment;
            $addComment->account_id=Auth::user()->id;
         
            $addComment->content =$req->content;
            $addComment->post_id = $post_id;
            $addComment->save();
            return back();  
        }
}
