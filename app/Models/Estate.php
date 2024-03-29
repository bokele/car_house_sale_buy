<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;
    protected $fillable = [
        'refereance', 'status_id', 'country_id', 'address_id', 'estate_type_id',
        'estate_name',
        'estate_space_size', 'propety_document', 'propety_document_1', 'propety_document_2',
        'propety_document_3', 'propety_document_4', 'propety_document_5',
        'propety_document_6', 'estate_descriptions'
    ];


    public function address()
    {
        return $this->belongsTo(CustomerAddress::class, 'address_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(EstateType::class, 'estate_type_id', 'id');
    }
}
