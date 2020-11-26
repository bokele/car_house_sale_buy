<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HouseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'house_id' => $this->id,
            'reference'  => $this->reference,
            'status_id' => $this->status_id,
            'country_id'  => $this->country_id,
            'address_id'  => $this->address_id,
            'type_id' => $this->type_id,
            'estate_space_size'  => $this->estate_space_size,
            'house_space_size'  => $this->house_space_size,
            'number_of_balconies'  => $this->number_of_balconies,
            'balconies_space_size'  => $this->balconies_space_size,
            'number_of_bedrooms'  => $this->number_of_bedrooms,
            'number_of_bathrooms' => $this->number_of_bathrooms,
            'number_of_garages' => $this->number_of_garages,
            'pets_allowed' => $this->pets_allowed,
            'estate_descriptions' => $this->estate_descriptions,
            'propety_document' => $this->propety_document,
            'propety_document_1' => $this->propety_document_1,
            'propety_document_2' => $this->propety_document_2,
            'propety_document_3' => $this->propety_document_3,
            'propety_document_4' => $this->propety_document_4,
            'propety_document_5' => $this->propety_document_5,
            'propety_document_6' => $this->propety_document_6,
            'type' => new EstateTypeResource($this->type),
            'address' => new AddressResource($this->address),
            'status' => new StatusResource($this->status),
        ];
    }
}
