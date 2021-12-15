<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends  Authenticatable
{
    use HasFactory;

    protected $table ='account';

    public function accountType(){
        return $this->belongsTo('App\Models\AccountType');
    }

    public function classrooms(){
        return $this->belongsToMany('App\Models\Classroom','classroom_student');
    }

    public function classroomWaits(){
        return $this->belongsToMany('App\Models\Classroom','student_wait');
    }
}
