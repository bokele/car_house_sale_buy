<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'vehicle_type', 'year'
    ];

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
