<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentSubmitExercise extends Model
{
    use HasFactory;

    protected $table="attachment_submit_exercise";

    public function submitExercise(){
        return $this->belongsTo('App\Models\SubmitExercise');
    }
}
