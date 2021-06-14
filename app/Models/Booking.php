<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['movieName', 'bookingTheatre', 'bookingType', 'bookingDate', 'bookingTime', 'bookingFName', 'bookingLName', 'bookingPNumber'];

    
}
