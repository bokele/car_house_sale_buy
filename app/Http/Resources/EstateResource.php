<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstateResource extends JsonResource
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
            'estate_id' => $this->id,
            'refereance' => $this->refereance,
            'status_id' => $this->status_id,
            'country_id' => $this->country_id,
            'address_id' => $this->address_id,
            'estate_type_id' => $this->estate_type_id,
            'estate_name' => $this->estate_name,
            'estate_space_size' => $this->estate_space_size,
            'propety_document' => $this->propety_document,
            'propety_document_1' => $this->propety_document_1,
            'propety_document_2' => $this->propety_document_2,
            'propety_document_3' => $this->propety_document_3,
            'propety_document_4' => $this->propety_document_4,
            'propety_document_5' => $this->propety_document_5,
            'propety_document_6' => $this->propety_document_6,
            'estate_descriptions' => $this->estate_descriptions,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'type' => new EstateTypeResource($this->type),
            'address' => new AddressResource($this->address),
            'status' => new StatusResource($this->status),
        ];
    }
}
