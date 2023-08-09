<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userresponse extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userresponse',
        'ip',
        'submitted_time',
        'destination',
        'rating',
    ];
  
    protected $table = 'userresponses';
   
    
}
