<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'country_id' => $this->country_id,
            'street_name' => $this->street_name,
            'street_address' => $this->street_address,
            'home_number' => $this->home_number,
            'city' => $this->city,
            'state' => $this->state,
            'post_code' => $this->post_code,
            'full_address' => $this->full_address,
            'country' => new CountryResource($this->country)
        ];
    }
}
