<?php

namespace App\Models;
use App\Models\Question;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;
    
    protected $table = 'test_questions';

    public function getQuestion(){
        return $this->hasOne(Question::class, 'id' , 'question_id');
    }
}
