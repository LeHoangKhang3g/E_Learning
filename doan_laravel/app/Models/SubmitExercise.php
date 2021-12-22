<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubmitExercise extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="submit_exercise";

    public function submitExercise(){
        return $this->belongsTo('App\Models\ClassroomStudent');
    }
    public function attachments(){
        return $this->hasMany('App\Models\AttachmentSubmitExercise');
    }

    public function post(){
        return $this->belongsTo('App\Models\Post');
    }
}
