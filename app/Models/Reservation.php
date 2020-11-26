<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pick_up_location_id', 'drop_off_location_id', 'customer_id',
        'car_id',
        'start_date'
    ];
}
