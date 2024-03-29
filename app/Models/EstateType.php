<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstateType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function estate()
    {
        return $this->hasMany(Estate::class);
    }
}
