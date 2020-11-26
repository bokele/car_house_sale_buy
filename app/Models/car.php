<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_model_id', 'category_id', 'location_id', 'model_code', 'production_year',
        'fuel', 'mileage', 'color', 'status', 'description_of_feature'
    ];

    public function carsold()
    {
        return $this->hasOne(Carsold::class);
    }

    public function carCategory()
    {
        return $this->belongsTo(CarCategory::class, 'category_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo(CarModel::class, 'car_model_id', 'id');
    }
}
