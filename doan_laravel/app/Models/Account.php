<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class Account extends  Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='account';
    public function accountType(){
        return $this->belongsTo('App\Models\AccountType');
    }

    public function classrooms(){
        return $this->belongsToMany('App\Models\Classroom','classroom_student','student_id','classroom_id');
    }

    public function classroomWaits(){
        return $this->belongsToMany('App\Models\Classroom','student_wait');
    }
}
