<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_id', 'category_id', 'location_id', 'model_code', 'production_year',
        'fuel', 'mileage', 'color', 'status', 'description_of_feature'
    ];
}
