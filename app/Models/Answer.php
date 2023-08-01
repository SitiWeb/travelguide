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
}
