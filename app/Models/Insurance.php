<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $fillable =[
        'name', 'type_insurance', 'started_date', 'ending_date', 'cost',
        'description', 'copy_insurance'
    ];
}
