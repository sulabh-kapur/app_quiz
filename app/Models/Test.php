<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\TestQuestionQuestion;

class Test extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'testdate' ,'subject_id','question_id' ];
    protected $casts = [
        'testdate' => 'datetime'
    ];

    public function getSubject(){
        return $this->hasOne(Subject::class,'id','subject_id');
     }

     public function getQuestion(){
        return $this->hasmany(TestQuestion::class,'test_id' ,'id');
     }

}
