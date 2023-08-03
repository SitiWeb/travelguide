<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'address',
        'url',
        'price',
        'activity_type',
        'destination_id'
    ];
    protected $table = 'venues';

    // Define the inverse of the one-to-many relationship with the Destination model
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
