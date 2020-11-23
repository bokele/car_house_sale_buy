<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $fillable =[
        'reference', 'status_id', 'country_id', 'address_id', 'type_id', 'estate_space_size', 
        'house_space_size','number_of_balconies', 'balconies_space_size', 'number_of_bedrooms',
        'number_of_bathrooms', 'number_of_garages', 'pets_allowed', 'estate_descriptions', 
        'propety_document','propety_document_1', 'propety_document_2', 'propety_document_3',
        'propety_document_4', 'propety_document_5', 'propety_document_6'

    ];
}
