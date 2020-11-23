<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'carsold_id', 'house_id', 'estat_id', 'status_id', 'max_price',
        'min_price', 'propose_price',
    ];
}
