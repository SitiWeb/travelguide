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
        'type_id',
        'pdf_path'
    ];

    protected $table = 'destinations';

    // Define the relationship with the Type model
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    // Define the relationship with the Venue model
    public function venues()
    {
        return $this->hasMany(Venue::class);
    }
  
}
