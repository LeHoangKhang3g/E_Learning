<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="post";

    public function submitExercises(){
        return $this->hasMany('App\Models\SubmitExercise');
    }

    public function classroom(){
        return $this ->belongsTo('App\Models\Classroom');
    }
}
