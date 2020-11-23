<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',  'car_id', 'pick_up_location_id', 'drop_of_location_id',
        'fuel_litter', 'start_date', 'end_date', 'remarque'
    ];
}
