<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable =[
        'ref_number', 'customer_id', 'currency', 'toatl_amount_paid', 'platform_share_total',
         'confirm', 'method',  'type'
    ];
}
