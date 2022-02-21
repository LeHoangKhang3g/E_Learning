<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="classroom";

    public function accounts(){
        return $this->belongsToMany('App\Models\Account','classroom_student');
    }

    public function accountWaits(){
        return $this->belongsToMany('App\Models\Account','student_wait');
    }
    public function posts(){
        return $this->hasMany('App\Models\Post');
        
    }
}
