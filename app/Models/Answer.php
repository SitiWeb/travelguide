<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function get_type($user_responses){
       
        $answer = Answer::where(
            [
            ['question_1', $user_responses[1]],
            ['question_2', $user_responses[2]],
            ['question_3', $user_responses[3]],
            ['question_4', $user_responses[4]],
            ['question_5', $user_responses[5]],
            ]
        )->with('type')->first();
        return $answer;
    }
}
