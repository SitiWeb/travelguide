<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
        'country',
        'description',
        'type_id'
    ];

    protected $table = 'destinations';

    // Define the relationship with the Type model
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
  
}
