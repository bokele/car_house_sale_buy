<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carsold extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_id', 'max_price', 'min_price', 'type', 'white_book',
        'tax_clearancy', 'last_insurancy',
        'image_0',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'image_6',
        'image_6',
        'image_7',
        'image_8',
        'image_9',
    ];
}
