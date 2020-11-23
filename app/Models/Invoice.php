<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fiilable = [
        'ref_number', 'payment_id','owrn_id', 'client_id', 'vat',
        'total_amount_payable', 'discount_amount', 'net_amount_payable',
        'platform_amount', 'total_amount_pay', 'invoice_for'
    ];
}
