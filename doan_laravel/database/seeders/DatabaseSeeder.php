<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\Account;
use App\Models\AccountType;
use App\Models\AttachmentPost;
use App\Models\AttachmentSubmitExercise;
use App\Models\Classroom;
use App\Models\ClassroomStudent;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostType;
use App\Models\StudentWait;
use App\Models\SubmitExercise;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AccountType::insert([
            'name'=>'Admin',
        ]);
        AccountType::insert([
            'name'=>'Teacher',
        ]);
        AccountType::insert([
            'name'=>'Student',
        ]);

        Account::insert([
            'code'              =>  'ADMINKHANGLH',
            'username'          =>  'khang123',
            'password'          =>  Hash::make('12345678'),
            'name'              =>  'Lê Hoàng Khang',
            'email'             =>  'khangxyz3g@gmail.com',
            'avatar'            =>  'ADMINKHANGLH.jpg',
            'code_password'     =>  '0',
            'account_type_id'   =>  '1',
        ]);
        Account::insert([
            'code'              =>  'GVMRIPZGRGRQ',
            'username'          =>  'khanhduy123',
            'password'          =>  Hash::make('12345678'),
            'name'              =>  'Hồ Khánh Duy',
            'email'             =>  '0306191205@caothang.edu.vn',
            'avatar'            =>  'GVMRIPZGRGRQ.jpg',
            'code_password'     =>  '0',
            'account_type_id'   =>  '2',
        ]);
        Account::insert([
            'code'              =>  'GVS2RVEJ44I7',
            'username'          =>  'tuan123',
            'password'          =>  Hash::make('12345678'),
            'name'              =>  'Nguyễn Quốc Tuấn',
            'email'             =>  '0306191291@caothang.edu.vn',
            'avatar'            =>  'GVS2RVEJ44I7.jpg',
            'code_password'     =>  '0',
            'account_type_id'   =>  '2',
        ]);
        Account::insert([
            'code'             =>  'STW9MCRNEBBA',
            'username'          =>  'trung123',
            'password'          =>  Hash::make('12345678'),
            'name'              =>  'Trần Quốc Trung',
            'email'             =>  'khangxyz4g@gmail.com',
            'avatar'            =>  'STW9MCRNEBBA.jpg',
            'code_password'     =>  '0',
            'account_type_id'   =>  '3',
        ]);
        Account::insert([
            'code'              =>  'STDQCYJMORTG',
            'username'          =>  'hieu123',
            'password'          =>  Hash::make('12345678'),
            'name'              =>  'Kiều Công Hiếu',
            'email'             =>  'khangxyz5g@gmail.com',
            'avatar'            =>  'STDQCYJMORTG.jpg',
            'code_password'     =>  '0',
            'account_type_id'   =>  '3',
        ]);
        Account::insert([
            'code'              =>  'STDQCYAICPOK',
            'username'          =>  'vinh123',
            'password'          =>  Hash::make('12345678'),
            'name'              =>  'Trần Quang Vinh',
            'email'             =>  'lehoangkhang4869@gmail.com',
            'avatar'            =>  'STDQCYAICPOK.jpg',
            'code_password'     =>  '0',
            'account_type_id'   =>  '3',
        ]);

        $classroom=new Classroom();
        $classroom->teacher_id = 2;
        $classroom->class_name = 'Lập trình php cơ bản';
        $classroom->code = 'CLOKDYAICPOK';
        $classroom->background = 'CLOKDYAICPOK.jpg';
        $classroom->content = 'Khoá học PHP trong vòng 3 tháng giúp bạn viết được một trang website cơ bản';
        $classroom->point_table = 'https://docs.google.com/spreadsheets/d/1h49GGjfLjbNUR_b6R9kw3eb6pHjVlDsUjheOUuB5WAc/edit#gid=0';
        $classroom->lock=false;
        $classroom->save();

        $classroom=new Classroom();
        $classroom->teacher_id = 2;
        $classroom->class_name = 'Thiết kế web cơ bản';
        $classroom->code = 'CLIKJFUCKDOP';
        $classroom->background = 'CLIKJFUCKDOP.jpg';
        $classroom->content = 'Khoá học thiết kế web trong vòng 3 tháng giúp bạn thiết kế được một template website cơ bản';
        $classroom->point_table = 'https://docs.google.com/spreadsheets/d/1ulrBBWt5zHTd-YeDZnvPASzlzkb-v1BK7y_fp5p3DWw/edit#gid=0';
        $classroom->lock=false;
        $classroom->save();
        
        $classroom=new Classroom();
        $classroom->teacher_id = 3;
        $classroom->class_name = 'Lập trình web Front-end';
        $classroom->code = 'CLIKJFUCKDOP';
        $classroom->background = 'CLIKJFUCKDOP.jpg';
        $classroom->content = 'Khoá học thiết kế web trong vòng 3 tháng giúp bạn thiết kế được một template website cơ bản';
        $classroom->point_table = 'https://docs.google.com/spreadsheets/d/1ulrBBWt5zHTd-YeDZnvPASzlzkb-v1BK7y_fp5p3DWw/edit#gid=0';
        $classroom->save();

        ClassroomStudent::insert([
            'student_id'    =>  4,
            'classroom_id'  =>  1,
        ]);

        ClassroomStudent::insert([
            'student_id'    =>  5,
            'classroom_id'  =>  1,
        ]);

        ClassroomStudent::insert([
            'student_id'    =>  6,
            'classroom_id'  =>  1,
        ]);
        ClassroomStudent::insert([
            'student_id'    =>  4,
            'classroom_id'  =>  2,
        ]);

        StudentWait::insert([
            'student_id'    =>  5,
            'classroom_id'  =>  2,
        ]);

        StudentWait::insert([
            'student_id'    =>  6,
            'classroom_id'  =>  2,
        ]);

        PostType::insert([
            'name'  =>  'Thông báo',
        ]);
        PostType::insert([
            'name'  =>  'Bài giảng',
        ]);
        PostType::insert([
            'name'  =>  'Bài tập',
        ]);

        $post=new Post();
        $post->class_id = 1;
        $post->post_type_id = 1;
        $post->title = 'Introduction';
        $post->content = 'Giới thiệu về php';
        $post->have_deadline = false;
        $post->save();
    }
}
