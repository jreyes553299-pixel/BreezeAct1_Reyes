<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'guest_name',
        'guest_email',
        'room_type',
        'check_in_date',
        'check_out_date',
    ];
}
