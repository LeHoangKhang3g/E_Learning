<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassroomStudent extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="classroom_student";

    public function submitExercise(){
        return $this->hasMany('App\Models\SubmitExercise');
    }
}
