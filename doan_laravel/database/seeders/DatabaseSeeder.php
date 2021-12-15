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
            'code'              =>  '0306191227',
            'username'          =>  'khang',
            'password'          =>  Hash::make('123'),
            'name'              =>  'Lê Hoàng Khang',
            'email'             =>  'khangxyz3g@gmail.com',
            'avatar'            =>  'khang.jpg',
            'account_type_id'   =>  '1',
        ]);
        Account::insert([
            'code'              =>  '0306191205',
            'username'          =>  'khanhduy',
            'password'          =>  Hash::make('123'),
            'name'              =>  'Hồ Khánh Duy',
            'email'             =>  'khanhduy@gmail.com',
            'avatar'            =>  'duy.jpg',
            'account_type_id'   =>  '2',
        ]);
        Account::insert([
            'code'              =>  '0306191291',
            'username'          =>  'tuan',
            'password'          =>  Hash::make('123'),
            'name'              =>  'Nguyễn Quốc Tuấn',
            'email'             =>  'tuan@gmail.com',
            'avatar'            =>  'tuan.jpg',
            'account_type_id'   =>  '2',
        ]);
        Account::insert([
            'code'             =>  '0306191288',
            'username'          =>  'trung',
            'password'          =>  Hash::make('123'),
            'name'              =>  'Trần Quốc Trung',
            'email'             =>  'trung@gmail.com',
            'avatar'            =>  'trung.jpg',
            'account_type_id'   =>  '3',
        ]);
        Account::insert([
            'code'              =>  '0306191218',
            'username'          =>  'hieu',
            'password'          =>  Hash::make('123'),
            'name'              =>  'Kiều Công Hiếu',
            'email'             =>  'hieu@gmail.com',
            'avatar'            =>  'hieu.jpg',
            'account_type_id'   =>  '3',
        ]);
        Account::insert([
            'code'              =>  '0306191293',
            'username'          =>  'vinh',
            'password'          =>  Hash::make('123'),
            'name'              =>  'Trần Quang Vinh',
            'email'             =>  'vinh@gmail.com',
            'avatar'            =>  'tuan.jpg',
            'account_type_id'   =>  '3',
        ]);

        $classroom=new Classroom();
        $classroom->teacher_id = 2;
        $classroom->class_name = 'Lập trình php cơ bản';
        $classroom->code = '123abcde';
        $classroom->background = 'php.jpg';
        $classroom->content = 'Khoá học PHP trong vòng 3 tháng giúp bạn viết được một trang website cơ bản';
        $classroom->point_table = 'https://docs.google.com/spreadsheets/d/1h49GGjfLjbNUR_b6R9kw3eb6pHjVlDsUjheOUuB5WAc/edit#gid=0';
        $classroom->save();

        $classroom=new Classroom();
        $classroom->teacher_id = 2;
        $classroom->class_name = 'Thiết kế web cơ bản';
        $classroom->code = 'abcxyz987';
        $classroom->background = 'web.jpg';
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
            'name'  =>  'lession',
        ]);
        PostType::insert([
            'name'  =>  'exercise',
        ]);
        PostType::insert([
            'name'  =>  'test',
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
