<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'country_id', 'street_name', 'street_address',
        'home_number', 'city', 'state', 'post_code',  'full_address'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
