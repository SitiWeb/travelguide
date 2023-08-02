<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];
    // Define the relationship with the Venue model
    public function destinations()
    {
        return $this->hasMany(Venue::class);
    }
}
